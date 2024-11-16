<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Kiểm tra nếu người dùng không đăng nhập
        if (Auth::check()) {
            // Kiểm tra quyền của người dùng
            $userRole = Auth::user()->role;

            // Kiểm tra quyền người dùng có hợp lệ với quyền yêu cầu hay không
            if ($userRole != $role) {
                // Trả về lỗi nếu quyền không hợp lệ
                return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập.');
            }

            // Nếu quyền hợp lệ, tiếp tục với request
            return $next($request);
        }

        // Nếu người dùng không đăng nhập, chuyển hướng đến trang login
        return redirect()->route('login')->with('error', 'Vui lòng đăng nhập.');
    }
}
