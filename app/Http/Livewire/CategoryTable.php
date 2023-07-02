<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

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
            ButtonGroupColumn::make('Opciones')
            ->buttons([
                LinkColumn::make('Editar')
                ->title(fn($row) => 'Editar ')
                ->location(fn($row) => route('categories.edit', $row->id)),
                LinkColumn::make('Eliminar')
                ->title(fn($row) => 'Eliminar')
                ->location(fn($row) => route('categories.destroy', $row->id)),
            ]),
        ];
    }
}
