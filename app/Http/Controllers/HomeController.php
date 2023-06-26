<?php

namespace App\Http\Controllers;

use App\ViewModels\HomeViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        # $this->middleware('auth');
    }

    public function index(): View
    {
        return view('public.home', new HomeViewModel());
    }
}
