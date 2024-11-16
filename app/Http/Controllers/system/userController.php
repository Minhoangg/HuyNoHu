<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function getAll()
    {
        // Lấy toàn bộ danh sách user từ bảng users
        $users = User::all();

        // Truyền danh sách user sang view
        return view('admin.user.userList', compact('users'));
    }


    public function create(){
        return view('admin/user/userAdd');
    }

    public function createHandle(Request $request)
    {
        $validatedData = $request->validate(
            [
                'username' => 'required|string|max:255|unique:users,username',
                'phone' => 'required|string|min:10|max:15|unique:users,phone',
                'password' => 'required|string|min:6',
            ],
            [
                'username.required' => 'Tên người dùng không được để trống.',
                'username.string' => 'Tên người dùng phải là chuỗi.',
                'username.max' => 'Tên người dùng không được vượt quá 255 ký tự.',
                'username.unique' => 'Tên người dùng đã tồn tại.',
                'phone.required' => 'Số điện thoại không được để trống.',
                'phone.string' => 'Số điện thoại phải là chuỗi.',
                'phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
                'phone.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
                'phone.unique' => 'Số điện thoại đã tồn tại.',
                'password.required' => 'Mật khẩu không được để trống.',
                'password.string' => 'Mật khẩu phải là chuỗi.',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            ]
        );

        // Thêm người dùng mới
        $user = User::create([
            'username' => $validatedData['username'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']), // Hash mật khẩu
        ]);

        // Chuyển hướng sau khi thêm thành công
        return redirect()->back()->with('success', 'Thêm người dùng thành công!');
    }

}
