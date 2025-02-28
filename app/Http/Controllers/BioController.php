<?php
namespace App\Http\Controllers;

use App\Http\Requests\CreateBioRequest;
use App\Http\Requests\UpdateBioRequest;
use App\Repositories\BioRepository;
use App\Repositories\PlayersRepository; // Correct repository name
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BioController extends AppBaseController
{
    /** @var  BioRepository */
    private $bioRepository;

    /** @var  PlayersRepository */
    private $playersRepository; // Updated property name

    public function __construct(BioRepository $bioRepo, PlayersRepository $playersRepo)
    {
        $this->bioRepository = $bioRepo;
        $this->playersRepository = $playersRepo; // Inject PlayersRepository
    }

    /**
     * Display a listing of the Bio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bios = $this->bioRepository->all();
        return view('bio.index')->with('bios', $bios);
    }

    /**
     * Show the form for creating a new Bio.
     *
     * @return Response
     */
    public function create()
    {
        // Fetch players and pass them to the view
        $players = $this->playersRepository->all()->pluck('first_name', 'id');
        return view('bio.create', compact('players'));
    }

    /**
     * Store a newly created Bio in storage.
     *
     * @param CreateBioRequest $request
     *
     * @return Response
     */
    public function store(CreateBioRequest $request)
    {
        $input = $request->all();
        $bio = $this->bioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bio.singular')]));

        return redirect(route('bio.index'));
    }

    /**
     * Display the specified Bio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bio = $this->bioRepository->find($id);

        if (empty($bio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bio.singular')]));
            return redirect(route('bio.index'));
        }

        return view('bio.show')->with('bio', $bio);
    }

    /**
     * Show the form for editing the specified Bio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bio = $this->bioRepository->find($id);

        if (empty($bio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bio.singular')]));
            return redirect(route('bio.index'));
        }

        // Fetch players and pass them along with the bio to the view
        $players = $this->playersRepository->all()->pluck('first_name', 'id');
        return view('bio.edit', compact('bio', 'players'));
    }

    /**
     * Update the specified Bio in storage.
     *
     * @param int $id
     * @param UpdateBioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBioRequest $request)
    {
        $bio = $this->bioRepository->find($id);

        if (empty($bio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bio.singular')]));
            return redirect(route('bio.index'));
        }

        $bio = $this->bioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bio.singular')]));

        return redirect(route('bio.index'));
    }

    /**
     * Remove the specified Bio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bio = $this->bioRepository->find($id);

        if (empty($bio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bio.singular')]));
            return redirect(route('bio.index'));
        }

        $this->bioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bio.singular')]));

        return redirect(route('bio.index'));
    }
}



