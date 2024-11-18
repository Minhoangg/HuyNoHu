<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginHandle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'password' => 'required',
        ], [
            'name.required' => 'Tên đăng nhập không được để trống.',
            'name.string' => 'Tên đăng nhập phải là một chuỗi.',
            'password.required' => 'Mật khẩu không được để trống.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            session(['user' => [
                'id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'coin' => Auth::user()->coin,
                'phone_number' => Auth::user()->phone_number,
            ]]);
            return redirect()->route('client.home-lobby');
        }

        return redirect()->back()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng.');
    }
}
