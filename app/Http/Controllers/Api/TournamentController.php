<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ResponseTrait;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TournamentController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $tournaments = Tournament::with(['players', 'matches'])->get();
        return $this->successResponse($tournaments, 'Tournaments retrieved successfully');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Tournament::$rules);

        if ($validator->fails()) {
            return $this->errorResponse('Validation error', $validator->errors());
        }

        $tournament = Tournament::create($request->all());
        return $this->successResponse($tournament, $this->messages['created']['tournament'], 201);
    }

    public function show($id)
    {
        $tournament = Tournament::with(['players', 'matches', 'tickets', 'galleries', 'videos'])->find($id);
        
        if (!$tournament) {
            return $this->errorResponse('Tournament not found', [], 404);
        }

        return $this->successResponse($tournament, 'Tournament retrieved successfully');
    }

    public function update(Request $request, $id)
    {
        $tournament = Tournament::find($id);
        
        if (!$tournament) {
            return $this->errorResponse('Tournament not found', [], 404);
        }

        $validator = Validator::make($request->all(), Tournament::$rules);

        if ($validator->fails()) {
            return $this->errorResponse('Validation error', $validator->errors());
        }

        $tournament->update($request->all());
        return $this->successResponse($tournament, $this->messages['updated']['tournament']);
    }

    public function destroy($id)
    {
        $tournament = Tournament::find($id);
        
        if (!$tournament) {
            return $this->errorResponse('Tournament not found', [], 404);
        }

        $tournament->delete();
        return $this->successResponse(null, $this->messages['deleted']['tournament']);
    }

    public function join($id)
    {
        $tournament = Tournament::find($id);
        
        if (!$tournament) {
            return $this->errorResponse('Tournament not found', [], 404);
        }

        $user = auth()->user();
        if ($tournament->players()->where('user_id', $user->id)->exists()) {
            return $this->errorResponse('You are already registered for this tournament');
        }

        $tournament->players()->attach($user->id);
        return $this->successResponse(null, $this->messages['joined']['tournament']);
    }

    public function leave($id)
    {
        $tournament = Tournament::find($id);
        
        if (!$tournament) {
            return $this->errorResponse('Tournament not found', [], 404);
        }

        $user = auth()->user();
        if (!$tournament->players()->where('user_id', $user->id)->exists()) {
            return $this->errorResponse('You are not registered for this tournament');
        }

        $tournament->players()->detach($user->id);
        return $this->successResponse(null, $this->messages['left']['tournament']);
    }

    public function myTournaments()
    {
        $user = auth()->user();
        $tournaments = $user->tournaments()->with(['matches'])->get();
        return $this->successResponse($tournaments, 'Your tournaments retrieved successfully');
    }
}
