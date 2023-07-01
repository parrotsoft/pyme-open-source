<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CategoryTable extends DataTableComponent
{

    protected $model = Category::class;
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
            ->hideIf(true),
            Column::make('Descripción', 'description')
            ->sortable()
            ->searchable(),
        ];
    }
}
