<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index(): View
    {
        return view('categories.index');
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = $request->validate([
            'description' => 'required',
        ]);

        $request->request->add(['user_id' => Auth::user()->getAuthIdentifier()]);

        Category::query()->create($request->all());

        return redirect(route('categories.index'));
    }
}
