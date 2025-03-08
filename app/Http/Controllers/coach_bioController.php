<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcoach_bioRequest;
use App\Http\Requests\Updatecoach_bioRequest;
use App\Repositories\coach_bioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class coach_bioController extends AppBaseController
{
    /** @var  coach_bioRepository */
    private $coachBioRepository;

    public function __construct(coach_bioRepository $coachBioRepo)
    {
        $this->coachBioRepository = $coachBioRepo;
    }

    /**
     * Display a listing of the coach_bio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $coachBios = $this->coachBioRepository->all();

        return view('coach_bios.index')
            ->with('coachBios', $coachBios);
    }

    /**
     * Show the form for creating a new coach_bio.
     *
     * @return Response
     */
    public function create()
    {
        return view('coach_bios.create');
    }

    /**
     * Store a newly created coach_bio in storage.
     *
     * @param Createcoach_bioRequest $request
     *
     * @return Response
     */
    public function store(Createcoach_bioRequest $request)
    {
        $input = $request->all();

        $coachBio = $this->coachBioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/coachBios.singular')]));

        return redirect(route('coachBios.index'));
    }

    /**
     * Display the specified coach_bio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coachBio = $this->coachBioRepository->find($id);

        if (empty($coachBio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachBios.singular')]));

            return redirect(route('coachBios.index'));
        }

        return view('coach_bios.show')->with('coachBio', $coachBio);
    }

    /**
     * Show the form for editing the specified coach_bio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coachBio = $this->coachBioRepository->find($id);

        if (empty($coachBio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachBios.singular')]));

            return redirect(route('coachBios.index'));
        }

        return view('coach_bios.edit')->with('coachBio', $coachBio);
    }

    /**
     * Update the specified coach_bio in storage.
     *
     * @param int $id
     * @param Updatecoach_bioRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecoach_bioRequest $request)
    {
        $coachBio = $this->coachBioRepository->find($id);

        if (empty($coachBio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachBios.singular')]));

            return redirect(route('coachBios.index'));
        }

        $coachBio = $this->coachBioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/coachBios.singular')]));

        return redirect(route('coachBios.index'));
    }

    /**
     * Remove the specified coach_bio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coachBio = $this->coachBioRepository->find($id);

        if (empty($coachBio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coachBios.singular')]));

            return redirect(route('coachBios.index'));
        }

        $this->coachBioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/coachBios.singular')]));

        return redirect(route('coachBios.index'));
    }
}
