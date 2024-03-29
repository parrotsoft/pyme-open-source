<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Application;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ApplicationTable extends DataTableComponent
{
    protected $model = Application::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Usuario", "user.name")
                ->searchable()
                ->sortable(),
            Column::make("Sistema Operativo", "operativeSystem.description")
                ->searchable()
                ->sortable(),
            Column::make("Categoria", "category.description")
                ->searchable()
                ->sortable(),
            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),
            Column::make("Version", "version")
                ->sortable(),
            Column::make("Estrellas", "star")
                ->sortable(),
            Column::make("Creado en", "created_at")
                ->sortable(),
            Column::make("Actualizado en", "updated_at")
                ->sortable(),
            ButtonGroupColumn::make('Opciones')
            ->buttons([
                LinkColumn::make('Editar')
                ->title(fn($row) => 'Editar')
                ->location(fn($row) => route('applications.edit', $row->id)),
                LinkColumn::make('Eliminar')
                ->title(fn($row) => 'Eliminar')
                ->location(fn($row) => route('applications.destroy', $row->id)),
            ]),
        ];
    }
}
