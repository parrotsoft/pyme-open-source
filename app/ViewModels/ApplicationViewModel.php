<?php

namespace App\ViewModels;

use App\Models\Category;
use App\Models\OperativeSystem;
use Spatie\ViewModels\ViewModel;

class ApplicationViewModel extends ViewModel
{
    public function __construct()
    {
        //
    }

    public function operativeSystems()
    {
        return OperativeSystem::query()
            ->where('active', '=', true)
            ->get();
    }

    public function categories()
    {
        return Category::query()
            ->where('active', '=', true)
            ->get();
    }

}
