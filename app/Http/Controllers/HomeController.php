<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Neu la khach -> chuyen huong ve khach
        $user = Auth::user();
        if ($user->role == 1) {
            // Neu la admin -> chuyen huong ve admin
            return redirect()->route('admin-home');
        } else {
            return redirect()->route('home-customer');
        }
    }
}
