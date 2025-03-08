<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcoach_overviewRequest;
use App\Http\Requests\Updatecoach_overviewRequest;
use App\Repositories\coach_overviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class coach_overviewController extends AppBaseController
{
    /** @var  coach_overviewRepository */
    private $coachOverviewRepository;

    public function __construct(coach_overviewRepository $coachOverviewRepo)
    {
        $this->coachOverviewRepository = $coachOverviewRepo;
    }

    /**
     * Display a listing of the coach_overview.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $coachOverviews = $this->coachOverviewRepository->all();

        return view('coach_overviews.index')
            ->with('coachOverviews', $coachOverviews);
    }

    /**
     * Show the form for creating a new coach_overview.
     *
     * @return Response
     */
    public function create()
    {
        return view('coach_overviews.create');
    }

    /**
     * Store a newly created coach_overview in storage.
     *
     * @param Createcoach_overviewRequest $request
     *
     * @return Response
     */
    public function store(Createcoach_overviewRequest $request)
    {
        $input = $request->all();

        $coachOverview = $this->coachOverviewRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/coachOverviews.singular')]));

        return redirect(route('coachOverviews.index'));
    }

    /**
     * Display the specified coach_overview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coachOverview = $this->coachOverviewRepository->find($id);

        if (empty($coachOverview)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachOverviews.singular')]));

            return redirect(route('coachOverviews.index'));
        }

        return view('coach_overviews.show')->with('coachOverview', $coachOverview);
    }

    /**
     * Show the form for editing the specified coach_overview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coachOverview = $this->coachOverviewRepository->find($id);

        if (empty($coachOverview)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachOverviews.singular')]));

            return redirect(route('coachOverviews.index'));
        }

        return view('coach_overviews.edit')->with('coachOverview', $coachOverview);
    }

    /**
     * Update the specified coach_overview in storage.
     *
     * @param int $id
     * @param Updatecoach_overviewRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecoach_overviewRequest $request)
    {
        $coachOverview = $this->coachOverviewRepository->find($id);

        if (empty($coachOverview)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachOverviews.singular')]));

            return redirect(route('coachOverviews.index'));
        }

        $coachOverview = $this->coachOverviewRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/coachOverviews.singular')]));

        return redirect(route('coachOverviews.index'));
    }

    /**
     * Remove the specified coach_overview from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coachOverview = $this->coachOverviewRepository->find($id);

        if (empty($coachOverview)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachOverviews.singular')]));

            return redirect(route('coachOverviews.index'));
        }

        $this->coachOverviewRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/coachOverviews.singular')]));

        return redirect(route('coachOverviews.index'));
    }
}
