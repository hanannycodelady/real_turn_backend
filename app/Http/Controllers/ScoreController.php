<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use App\Repositories\ScoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Tournament;
use App\Models\Players;

class ScoreController extends AppBaseController
{
    /** @var  ScoreRepository */
    private $scoreRepository;

    public function __construct(ScoreRepository $scoreRepo)
    {
        $this->scoreRepository = $scoreRepo;
    }

    /**
     * Display a listing of the Score.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $scores = $this->scoreRepository->all();

        return view('scores.index')
            ->with('scores', $scores);
    }

    /**
     * Show the form for creating a new Score.
     *
     * @return Response
     */
    public function create()
    {
        $tournaments = Tournament::pluck('tournament_name', 'id');
        $players = Players::pluck('first_name', 'id');

        return view('scores.create', compact('tournaments', 'players'));
    }

    /**
     * Store a newly created Score in storage.
     *
     * @param CreateScoreRequest $request
     *
     * @return Response
     */
    public function store(CreateScoreRequest $request)
    {
        $input = $request->all();

        $score = $this->scoreRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/scores.singular')]));

        return redirect(route('scores.index'));
    }

    /**
     * Display the specified Score.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $score = $this->scoreRepository->find($id);

        if (empty($score)) {
            Flash::error(__('messages.not_found', ['model' => __('models/scores.singular')]));

            return redirect(route('scores.index'));
        }

        return view('scores.show')->with('score', $score);
    }

    /**
     * Show the form for editing the specified Score.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $score = $this->scoreRepository->find($id);
        $tournaments = Tournament::pluck('tournament_name', 'id');
        $players = Players::pluck('first_name', 'id');

        if (empty($score)) {
            Flash::error(__('messages.not_found', ['model' => __('models/scores.singular')]));

            return redirect(route('scores.index'));
        }

        return view('scores.edit', compact('score', 'tournaments', 'players'));
    }

    /**
     * Update the specified Score in storage.
     *
     * @param int $id
     * @param UpdateScoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScoreRequest $request)
    {
        $score = $this->scoreRepository->find($id);

        if (empty($score)) {
            Flash::error(__('messages.not_found', ['model' => __('models/scores.singular')]));

            return redirect(route('scores.index'));
        }

        $score = $this->scoreRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/scores.singular')]));

        return redirect(route('scores.index'));
    }

    /**
     * Remove the specified Score from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $score = $this->scoreRepository->find($id);

        if (empty($score)) {
            Flash::error(__('messages.not_found', ['model' => __('models/scores.singular')]));

            return redirect(route('scores.index'));
        }

        $this->scoreRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/scores.singular')]));

        return redirect(route('scores.index'));
    }
}
