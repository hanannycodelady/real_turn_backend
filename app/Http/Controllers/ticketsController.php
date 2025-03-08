<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateticketsRequest;
use App\Http\Requests\UpdateticketsRequest;
use App\Repositories\ticketsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ticketsController extends AppBaseController
{
    /** @var  ticketsRepository */
    private $ticketsRepository;

    public function __construct(ticketsRepository $ticketsRepo)
    {
        $this->ticketsRepository = $ticketsRepo;
    }

    /**
     * Display a listing of the tickets.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tickets = $this->ticketsRepository->all();

        return view('tickets.index')
            ->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new tickets.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created tickets in storage.
     *
     * @param CreateticketsRequest $request
     *
     * @return Response
     */
    public function store(CreateticketsRequest $request)
    {
        $input = $request->all();

        $tickets = $this->ticketsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tickets.singular')]));

        return redirect(route('tickets.index'));
    }

    /**
     * Display the specified tickets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tickets = $this->ticketsRepository->find($id);

        if (empty($tickets)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tickets.singular')]));

            return redirect(route('tickets.index'));
        }

        return view('tickets.show')->with('tickets', $tickets);
    }

    /**
     * Show the form for editing the specified tickets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tickets = $this->ticketsRepository->find($id);

        if (empty($tickets)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tickets.singular')]));

            return redirect(route('tickets.index'));
        }

        return view('tickets.edit')->with('tickets', $tickets);
    }

    /**
     * Update the specified tickets in storage.
     *
     * @param int $id
     * @param UpdateticketsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateticketsRequest $request)
    {
        $tickets = $this->ticketsRepository->find($id);

        if (empty($tickets)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tickets.singular')]));

            return redirect(route('tickets.index'));
        }

        $tickets = $this->ticketsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tickets.singular')]));

        return redirect(route('tickets.index'));
    }

    /**
     * Remove the specified tickets from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tickets = $this->ticketsRepository->find($id);

        if (empty($tickets)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tickets.singular')]));

            return redirect(route('tickets.index'));
        }

        $this->ticketsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tickets.singular')]));

        return redirect(route('tickets.index'));
    }
}
