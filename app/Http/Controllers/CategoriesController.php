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

    public function edit(int $id)
    {
        $category = Category::query()->find($id);
        return view('categories.create', compact('category'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => 'required',
        ]);

        $request->request->add(['user_id' => Auth::user()->getAuthIdentifier()]);

        Category::query()->create($request->all());

        return redirect(route('categories.index'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'description' => 'required',
        ]);

        Category::query()->find($id)->update([
            'description' => $request->get('description')
        ]);
        return redirect(route('categories.index'));
    }

    public function destroy(int $id): RedirectResponse
    {
        Category::query()->find($id)->delete();
        return redirect(route('categories.index'));
    }
}
