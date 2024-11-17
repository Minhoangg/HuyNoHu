<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lobby;

class LobbyController extends Controller
{
    public function index()
    {
        $lobbies = Lobby::get();
        return view('admin/lobby/list', ['lobbies' => $lobbies]);
    }
    public function create()
    {
        return view('admin/lobby/add');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'name.required' => 'Tên sảnh không được để trống.',
                'image.image' => 'Tệp tải lên phải là ảnh.',
                'image.mimes' => 'ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
                'image.max' => 'Kích thước ảnh không được vượt quá 2MB.',
            ]
        );

        $lobby = new Lobby();
        $lobby->name = $request->input('name');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('assets/img/img_lobby', 'public');
            $lobby->image = $imagePath;
        }

        $lobby->save();

        return redirect()->route('system.lobby-list')->with('success', 'Sảnh game đã được thêm thành công.');
    }
}