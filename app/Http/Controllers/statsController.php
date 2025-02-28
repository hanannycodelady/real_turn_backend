<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestatsRequest;
use App\Http\Requests\UpdatestatsRequest;
use App\Repositories\statsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class statsController extends AppBaseController
{
    /** @var  statsRepository */
    private $statsRepository;

    public function __construct(statsRepository $statsRepo)
    {
        $this->statsRepository = $statsRepo;
    }

    /**
     * Display a listing of the stats.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stats = $this->statsRepository->all();

        return view('stats.index')
            ->with('stats', $stats);
    }

    /**
     * Show the form for creating a new stats.
     *
     * @return Response
     */
    public function create()
    {
        return view('stats.create');
    }

    /**
     * Store a newly created stats in storage.
     *
     * @param CreatestatsRequest $request
     *
     * @return Response
     */
    public function store(CreatestatsRequest $request)
    {
        $input = $request->all();

        $stats = $this->statsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/stats.singular')]));

        return redirect(route('stats.index'));
    }

    /**
     * Display the specified stats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stats = $this->statsRepository->find($id);

        if (empty($stats)) {
            Flash::error(__('messages.not_found', ['model' => __('models/stats.singular')]));

            return redirect(route('stats.index'));
        }

        return view('stats.show')->with('stats', $stats);
    }

    /**
     * Show the form for editing the specified stats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stats = $this->statsRepository->find($id);

        if (empty($stats)) {
            Flash::error(__('messages.not_found', ['model' => __('models/stats.singular')]));

            return redirect(route('stats.index'));
        }

        return view('stats.edit')->with('stats', $stats);
    }

    /**
     * Update the specified stats in storage.
     *
     * @param int $id
     * @param UpdatestatsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestatsRequest $request)
    {
        $stats = $this->statsRepository->find($id);

        if (empty($stats)) {
            Flash::error(__('messages.not_found', ['model' => __('models/stats.singular')]));

            return redirect(route('stats.index'));
        }

        $stats = $this->statsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/stats.singular')]));

        return redirect(route('stats.index'));
    }

    /**
     * Remove the specified stats from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stats = $this->statsRepository->find($id);

        if (empty($stats)) {
            Flash::error(__('messages.not_found', ['model' => __('models/stats.singular')]));

            return redirect(route('stats.index'));
        }

        $this->statsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/stats.singular')]));

        return redirect(route('stats.index'));
    }
}
