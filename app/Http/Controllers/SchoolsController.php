<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;
use App\Repositories\SchoolsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SchoolsController extends AppBaseController
{
    /** @var  SchoolsRepository */
    private $schoolsRepository;

    public function __construct(SchoolsRepository $schoolsRepo)
    {
        $this->schoolsRepository = $schoolsRepo;
    }

    /**
     * Display a listing of the Schools.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $schools = $this->schoolsRepository->all();

        return view('schools.index')
            ->with('schools', $schools);
    }

    /**
     * Show the form for creating a new Schools.
     *
     * @return Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created Schools in storage.
     *
     * @param CreateSchoolsRequest $request
     *
     * @return Response
     */
    public function store(CreateSchoolsRequest $request)
    {
        $input = $request->all();

        $schools = $this->schoolsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/schools.singular')]));

        return redirect(route('schools.index'));
    }

    /**
     * Display the specified Schools.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $schools = $this->schoolsRepository->find($id);

        if (empty($schools)) {
            Flash::error(__('messages.not_found', ['model' => __('models/schools.singular')]));

            return redirect(route('schools.index'));
        }

        return view('schools.show')->with('schools', $schools);
    }

    /**
     * Show the form for editing the specified Schools.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $schools = $this->schoolsRepository->find($id);

        if (empty($schools)) {
            Flash::error(__('messages.not_found', ['model' => __('models/schools.singular')]));

            return redirect(route('schools.index'));
        }

        return view('schools.edit')->with('schools', $schools);
    }

    /**
     * Update the specified Schools in storage.
     *
     * @param int $id
     * @param UpdateSchoolsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchoolsRequest $request)
    {
        $schools = $this->schoolsRepository->find($id);

        if (empty($schools)) {
            Flash::error(__('messages.not_found', ['model' => __('models/schools.singular')]));

            return redirect(route('schools.index'));
        }

        $schools = $this->schoolsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/schools.singular')]));

        return redirect(route('schools.index'));
    }

    /**
     * Remove the specified Schools from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schools = $this->schoolsRepository->find($id);

        if (empty($schools)) {
            Flash::error(__('messages.not_found', ['model' => __('models/schools.singular')]));

            return redirect(route('schools.index'));
        }

        $this->schoolsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/schools.singular')]));

        return redirect(route('schools.index'));
    }
}
