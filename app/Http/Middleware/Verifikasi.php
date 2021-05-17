<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class Verifikasi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->keterangan == "Verifikasi"){
            return $next($request);
        }
        return redirect('/')->with('error', "data diri Anda sedang di proses silahkan tunggu beberapa saat lagi untuk melakukan pemesanan dan login kembali");
    }
}
