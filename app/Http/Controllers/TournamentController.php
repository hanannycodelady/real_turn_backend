<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Repositories\TournamentRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class TournamentController extends Controller
{
    private $tournamentRepository;

    public function __construct(TournamentRepository $tournamentRepo)
    {
        $this->tournamentRepository = $tournamentRepo;
    }

    /**
     * Display a listing of the Tournament.
     */
    public function index()
    {
        $tournaments = $this->tournamentRepository->all();
        return view('tournaments.index', compact('tournaments'));
    }

    /**
     * Show the form for creating a new Tournament.
     */
    public function create()
    {
        return view('tournaments.create');
    }

    /**
     * Store a newly created Tournament in storage.
     */
    public function store(CreateTournamentRequest $request)
    {
        $tournament = $this->tournamentRepository->create($request->validated());
        Flash::success('Tournament created successfully.');
        return redirect()->route('tournaments.index');
    }

    /**
     * Display the specified Tournament.
     */
    public function show($id)
    {
        $tournament = $this->tournamentRepository->find($id);
        if (!$tournament) {
            Flash::error('Tournament not found.');
            return redirect()->route('tournaments.index');
        }
        return view('tournaments.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified Tournament.
     */
    public function edit($id)
    {
        $tournament = $this->tournamentRepository->find($id);
        if (!$tournament) {
            Flash::error('Tournament not found.');
            return redirect()->route('tournaments.index');
        }
        return view('tournaments.edit', compact('tournament'));
    }

    /**
     * Update the specified Tournament in storage.
     */
    public function update($id, UpdateTournamentRequest $request)
    {
        $tournament = $this->tournamentRepository->find($id);
        if (!$tournament) {
            Flash::error('Tournament not found.');
            return redirect()->route('tournaments.index');
        }
        $this->tournamentRepository->update($request->validated(), $id);
        Flash::success('Tournament updated successfully.');
        return redirect()->route('tournaments.index');
    }

    /**
     * Remove the specified Tournament from storage.
     */
    public function destroy($id)
    {
        $tournament = $this->tournamentRepository->find($id);
        if (!$tournament) {
            Flash::error('Tournament not found.');
            return redirect()->route('tournaments.index');
        }
        $this->tournamentRepository->delete($id);
        Flash::success('Tournament deleted successfully.');
        return redirect()->route('tournaments.index');
    }
}
