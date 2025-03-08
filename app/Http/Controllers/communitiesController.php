<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecommunitiesRequest;
use App\Http\Requests\UpdatecommunitiesRequest;
use App\Repositories\communitiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class communitiesController extends AppBaseController
{
    /** @var  communitiesRepository */
    private $communitiesRepository;

    public function __construct(communitiesRepository $communitiesRepo)
    {
        $this->communitiesRepository = $communitiesRepo;
    }

    /**
     * Display a listing of the communities.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $communities = $this->communitiesRepository->all();

        return view('communities.index')
            ->with('communities', $communities);
    }

    /**
     * Show the form for creating a new communities.
     *
     * @return Response
     */
    public function create()
    {
        return view('communities.create');
    }

    /**
     * Store a newly created communities in storage.
     *
     * @param CreatecommunitiesRequest $request
     *
     * @return Response
     */
    public function store(CreatecommunitiesRequest $request)
    {
        $input = $request->all();

        $communities = $this->communitiesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/communities.singular')]));

        return redirect(route('communities.index'));
    }

    /**
     * Display the specified communities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $communities = $this->communitiesRepository->find($id);

        if (empty($communities)) {
            Flash::error(__('messages.not_found', ['model' => __('models/communities.singular')]));

            return redirect(route('communities.index'));
        }

        return view('communities.show')->with('communities', $communities);
    }

    /**
     * Show the form for editing the specified communities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $communities = $this->communitiesRepository->find($id);

        if (empty($communities)) {
            Flash::error(__('messages.not_found', ['model' => __('models/communities.singular')]));

            return redirect(route('communities.index'));
        }

        return view('communities.edit')->with('communities', $communities);
    }

    /**
     * Update the specified communities in storage.
     *
     * @param int $id
     * @param UpdatecommunitiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecommunitiesRequest $request)
    {
        $communities = $this->communitiesRepository->find($id);

        if (empty($communities)) {
            Flash::error(__('messages.not_found', ['model' => __('models/communities.singular')]));

            return redirect(route('communities.index'));
        }

        $communities = $this->communitiesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/communities.singular')]));

        return redirect(route('communities.index'));
    }

    /**
     * Remove the specified communities from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $communities = $this->communitiesRepository->find($id);

        if (empty($communities)) {
            Flash::error(__('messages.not_found', ['model' => __('models/communities.singular')]));

            return redirect(route('communities.index'));
        }

        $this->communitiesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/communities.singular')]));

        return redirect(route('communities.index'));
    }
}
