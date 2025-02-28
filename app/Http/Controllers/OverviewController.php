<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOverviewRequest;
use App\Http\Requests\UpdateOverviewRequest;
use App\Repositories\OverviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Players;
use Flash;
use Response;

class OverviewController extends AppBaseController
{
    /** @var OverviewRepository */
    private $overviewRepository;

    public function __construct(OverviewRepository $overviewRepo)
    {
        $this->overviewRepository = $overviewRepo;
    }

    /**
     * Display a listing of the Overview.
     */
    public function index(Request $request)
    {
        $overviews = $this->overviewRepository->all();

        return view('overviews.index')->with('overviews', $overviews);
    }

    /**
     * Show the form for creating a new Overview.
     */
    public function create()
    {
        $players = Players::all(); // Fetch all players
        return view('overviews.create', compact('players'));
    }

    /**
     * Store a newly created Overview in storage.
     */
    public function store(CreateOverviewRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('player_image')) {
            $input['player_image'] = $request->file('player_image')->store('players', 'public');
        }

        if ($request->hasFile('title_image')) {
            $input['title_image'] = $request->file('title_image')->store('titles', 'public');
        }

        $overview = $this->overviewRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('overviews.singular')]));

        return redirect(route('overviews.index'));
    }

    /**
     * Display the specified Overview.
     */
    public function show($id)
    {
        $overview = $this->overviewRepository->find($id);

        if (empty($overview)) {
            Flash::error(__('messages.not_found', ['model' => __('overviews.singular')]));
            return redirect(route('overviews.index'));
        }

        return view('overviews.show')->with('overview', $overview);
    }

    /**
     * Show the form for editing the specified Overview.
     */
    public function edit($id)
    {
        $overview = $this->overviewRepository->find($id);

        if (empty($overview)) {
            Flash::error(__('messages.not_found', ['model' => __('overviews.singular')]));
            return redirect(route('overviews.index'));
        }

        $players = Players::all(); // Fetch all players

        return view('overviews.edit', compact('overview', 'players'));
    }

    /**
     * Update the specified Overview in storage.
     */
    public function update($id, UpdateOverviewRequest $request)
    {
        $overview = $this->overviewRepository->find($id);

        if (empty($overview)) {
            Flash::error(__('messages.not_found', ['model' => __('overviews.singular')]));
            return redirect(route('overviews.index'));
        }

        $input = $request->all();

        if ($request->hasFile('player_image')) {
            $input['player_image'] = $request->file('player_image')->store('players', 'public');
        }

        if ($request->hasFile('title_image')) {
            $input['title_image'] = $request->file('title_image')->store('titles', 'public');
        }

        $overview = $this->overviewRepository->update($input, $id);

        Flash::success(__('messages.updated', ['model' => __('overviews.singular')]));

        return redirect(route('overviews.index'));
    }

    /**
     * Remove the specified Overview from storage.
     */
    public function destroy($id)
    {
        $overview = $this->overviewRepository->find($id);

        if (empty($overview)) {
            Flash::error(__('messages.not_found', ['model' => __('overviews.singular')]));
            return redirect(route('overviews.index'));
        }

        $this->overviewRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('overviews.singular')]));

        return redirect(route('overviews.index'));
    }
}
