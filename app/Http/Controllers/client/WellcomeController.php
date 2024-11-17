<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Lobby;
use App\Livewire\HandleGame;

class WellcomeController extends Controller
{
    public function index()
    {
        return view('client/wellcome');
    }

    public function home()
    {
        // Thay thế getAll() bằng all()
        $lobbys = Lobby::all(); // Hoặc nếu cần điều kiện có thể dùng $lobbys = Lobby::get();
        return view('client/home', ['lobbys' => $lobbys]);
    }

    public function details($id)
    {
        // Thay thế getAll() bằng get()
        $games = Game::where('lobby_id', $id)->get(); // Sử dụng get() thay vì getAll()
        return view('client/webdetail', ['games' => $games]);
    }

    public function getScore($id)
    {
        $GameId = $id;

        return view('client.getscoregame', compact('GameId'));
    }
}
