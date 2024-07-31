<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == '1') {
                return $next($request);
            } else {
                return redirect()->route('fromLogin')->with([
                    'err' => 'Bạn không có quyền hạn'
                ]);
            }
        } else {
            return redirect()->route('fromLogin')->with([
                'err' => 'Bạn cần đăng nhập vào hệ thống'
            ]);
        }
    }
}