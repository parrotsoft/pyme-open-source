<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Category;
use App\Models\OperativeSystem;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPagination extends Component
{
    use WithPagination;
    public $searchTerm;

    public $orderBy;
    public $filterSO;
    public $filterCategory;

    public $operativeSystems;

    public $categories;

    public function __construct($id = null)
    {
        $this->operativeSystems = OperativeSystem::query()
            ->where('active', '=',true)
            ->get();

        $this->categories = Category::query()
            ->where('active','=',true)
            ->get();
    }

    public function sortBy($field)
    {
        $this->orderBy = $field;
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $applications = Application::query()
        ->where('active', '=', true)
            ->where('name','like',$searchTerm);

        if ($this->filterSO) {
            $applications->where('operative_system_id', '=', $this->filterSO);
        }

        if ($this->filterCategory) {
            $applications->where('category_id', '=', $this->filterCategory);
        }

        if ($this->orderBy) {
            $applications->orderBy($this->orderBy);
        }

        return view('livewire.search-pagination', [
            'applications' => $applications->paginate()
        ]);
    }

}
