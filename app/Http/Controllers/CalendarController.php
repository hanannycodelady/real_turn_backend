<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCalendarRequest;
use App\Http\Requests\UpdateCalendarRequest;
use App\Repositories\CalendarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CalendarController extends AppBaseController
{
    /** @var  CalendarRepository */
    private $calendarRepository;

    public function __construct(CalendarRepository $calendarRepo)
    {
        $this->calendarRepository = $calendarRepo;
    }

    /**
     * Display a listing of the Calendar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $calendars = $this->calendarRepository->all();

        return view('calendars.index')
            ->with('calendars', $calendars);
    }

    /**
     * Show the form for creating a new Calendar.
     *
     * @return Response
     */
    public function create()
    {
        return view('calendars.create');
    }

    /**
     * Store a newly created Calendar in storage.
     *
     * @param CreateCalendarRequest $request
     *
     * @return Response
     */
    public function store(CreateCalendarRequest $request)
    {
        $input = $request->all();

        $calendar = $this->calendarRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/calendars.singular')]));

        return redirect(route('calendars.index'));
    }

    /**
     * Display the specified Calendar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error(__('messages.not_found', ['model' => __('models/calendars.singular')]));

            return redirect(route('calendars.index'));
        }

        return view('calendars.show')->with('calendar', $calendar);
    }

    /**
     * Show the form for editing the specified Calendar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error(__('messages.not_found', ['model' => __('models/calendars.singular')]));

            return redirect(route('calendars.index'));
        }

        return view('calendars.edit')->with('calendar', $calendar);
    }

    /**
     * Update the specified Calendar in storage.
     *
     * @param int $id
     * @param UpdateCalendarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCalendarRequest $request)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error(__('messages.not_found', ['model' => __('models/calendars.singular')]));

            return redirect(route('calendars.index'));
        }

        $calendar = $this->calendarRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/calendars.singular')]));

        return redirect(route('calendars.index'));
    }

    /**
     * Remove the specified Calendar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error(__('messages.not_found', ['model' => __('models/calendars.singular')]));

            return redirect(route('calendars.index'));
        }

        $this->calendarRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/calendars.singular')]));

        return redirect(route('calendars.index'));
    }
}
