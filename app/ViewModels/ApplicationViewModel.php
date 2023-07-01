<?php

namespace App\ViewModels;

use App\Models\Application;
use App\Models\Category;
use App\Models\OperativeSystem;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class ApplicationViewModel extends ViewModel
{
    public function __construct(public ?int $applicationId = null)
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

    public function application(): null | Application
    {
        if (isset($this->applicationId)) {
            return Application::query()->find($this->applicationId);
        }

        return null;
    }

    public function stars(): array
    {
        return [
            1, 2, 3, 4, 5
        ];
    }
}
