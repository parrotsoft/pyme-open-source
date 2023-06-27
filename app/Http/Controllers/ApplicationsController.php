<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\ViewModels\ApplicationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApplicationsController extends Controller
{
    public function index(): View
    {
        return view('applications.index');
    }

    public function create(): View
    {
        return view('applications.create', new ApplicationViewModel());
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = $request->validate([
            'operative_system_id' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $request->request->add(['user_id' => Auth::user()->getAuthIdentifier()]);

        Application::query()->create($request->all());

        return redirect(route('applications.index'));

    }
}
