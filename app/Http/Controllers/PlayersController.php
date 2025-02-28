<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayersRequest;
use App\Http\Requests\UpdatePlayersRequest;
use App\Repositories\PlayersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

class PlayersController extends AppBaseController
{
    private $playersRepository;

    public function __construct(PlayersRepository $playersRepo)
    {
        $this->playersRepository = $playersRepo;
    }

    public function index(Request $request)
    {
        $players = $this->playersRepository->all();
        return view('players.index')->with('players', $players);
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(CreatePlayersRequest $request)
    {
        $input = $request->except(['player_image', 'flag_image']);

        if ($request->hasFile('player_image')) {
            $path = $request->file('player_image')->store('players', 'public');
            $input['Player_image'] = $path;
        }

        if ($request->hasFile('flag_image')) {
            $flagPath = $request->file('flag_image')->store('flags', 'public');
            $input['flag_image'] = $flagPath;
        }

        $players = $this->playersRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('players.singular')]));
        return redirect(route('players.index'));
    }

    public function show($id)
    {
        $players = $this->playersRepository->find($id);

        if (empty($players)) {
            Flash::error(__('messages.not_found', ['model' => __('players.singular')]));
            return redirect(route('players.index'));
        }

        return view('players.show')->with('players', $players);
    }

    public function edit($id)
    {
        $players = $this->playersRepository->find($id);

        if (empty($players)) {
            Flash::error(__('messages.not_found', ['model' => __('players.singular')]));
            return redirect(route('players.index'));
        }

        return view('players.edit')->with('players', $players);
    }

    public function update($id, UpdatePlayersRequest $request)
    {
        $players = $this->playersRepository->find($id);

        if (empty($players)) {
            Flash::error(__('messages.not_found', ['model' => __('players.singular')]));
            return redirect(route('players.index'));
        }

        $input = $request->all();

        if ($request->hasFile('player_image')) {
            if ($players->Player_image && Storage::disk('public')->exists($players->Player_image)) {
                Storage::disk('public')->delete($players->Player_image);
            }
            $path = $request->file('player_image')->store('players', 'public');
            $input['Player_image'] = $path;
        }

        if ($request->hasFile('flag_image')) {
            if ($players->flag_image && Storage::disk('public')->exists($players->flag_image)) {
                Storage::disk('public')->delete($players->flag_image);
            }
            $flagPath = $request->file('flag_image')->store('flags', 'public');
            $input['Flag_image'] = $flagPath;
        }

        $players = $this->playersRepository->update($input, $id);

        Flash::success(__('messages.updated', ['model' => __('players.singular')]));
        return redirect(route('players.index'));
    }


    public function destroy($id)
    {
        $players = $this->playersRepository->find($id);

        if (empty($players)) {
            Flash::error(__('messages.not_found', ['model' => __('players.singular')]));
            return redirect(route('players.index'));
        }

        if ($players->Player_image && Storage::disk('public')->exists($players->Player_image)) {
            Storage::disk('public')->delete($players->Player_image);
        }

        if ($players->flag_image && Storage::disk('public')->exists($players->flag_image)) {
            Storage::disk('public')->delete($players->flag_image);
        }

        $this->playersRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('players.singular')]));
        return redirect(route('players.index'));
    }
}
