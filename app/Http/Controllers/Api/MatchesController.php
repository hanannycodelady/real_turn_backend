<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ResponseTrait;
use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatchesController extends Controller
{
    use ResponseTrait;

    protected $rules = [
        'tournament_id' => 'required|exists:tournaments,id',
        'player1_id' => 'required|exists:users,id',
        'player2_id' => 'required|exists:users,id',
        'court_number' => 'required|integer',
        'start_time' => 'required|date',
        'status' => 'required|in:scheduled,in_progress,completed,cancelled',
        'score' => 'nullable|string',
        'winner_id' => 'nullable|exists:users,id',
    ];

    public function index()
    {
        $matches = Matches::with(['tournament', 'player1', 'player2', 'winner'])->get();
        return $this->successResponse($matches, 'Matches retrieved successfully');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return $this->errorResponse('Validation error', $validator->errors());
        }

        $match = Matches::create($request->all());
        return $this->successResponse($match, $this->messages['created']['match'], 201);
    }

    public function show($id)
    {
        $match = Matches::with(['tournament', 'player1', 'player2', 'winner', 'scores'])->find($id);
        
        if (!$match) {
            return $this->errorResponse('Match not found', [], 404);
        }

        return $this->successResponse($match, 'Match retrieved successfully');
    }

    public function update(Request $request, $id)
    {
        $match = Matches::find($id);
        
        if (!$match) {
            return $this->errorResponse('Match not found', [], 404);
        }

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return $this->errorResponse('Validation error', $validator->errors());
        }

        $match->update($request->all());
        return $this->successResponse($match, $this->messages['updated']['match']);
    }

    public function destroy($id)
    {
        $match = Matches::find($id);
        
        if (!$match) {
            return $this->errorResponse('Match not found', [], 404);
        }

        $match->delete();
        return $this->successResponse(null, $this->messages['deleted']['match']);
    }

    public function updateScore(Request $request, $id)
    {
        $match = Matches::find($id);
        
        if (!$match) {
            return $this->errorResponse('Match not found', [], 404);
        }

        $validator = Validator::make($request->all(), [
            'score' => 'required|string',
            'winner_id' => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return $this->errorResponse('Validation error', $validator->errors());
        }

        $match->update([
            'score' => $request->score,
            'winner_id' => $request->winner_id,
            'status' => 'completed'
        ]);

        return $this->successResponse($match, 'Match score updated successfully');
    }

    public function playerMatches($playerId)
    {
        $matches = Matches::where('player1_id', $playerId)
            ->orWhere('player2_id', $playerId)
            ->with(['tournament', 'player1', 'player2', 'winner'])
            ->get();

        return $this->successResponse($matches, 'Player matches retrieved successfully');
    }

    public function tournamentMatches($tournamentId)
    {
        $matches = Matches::where('tournament_id', $tournamentId)
            ->with(['player1', 'player2', 'winner'])
            ->get();

        return $this->successResponse($matches, 'Tournament matches retrieved successfully');
    }
}
