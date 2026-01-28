<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        // 1. Lấy tuổi từ Session 
        $age = session('tuoi_da_luu');

        // 2. Kiểm tra Logic:
        if (!is_numeric($age) || $age < 18) {
            return response('Không được phép truy cập', 403);
        }

        // 3. Nếu thỏa mãn (>= 18), cho phép đi tiếp
        return $next($request);
    }
}