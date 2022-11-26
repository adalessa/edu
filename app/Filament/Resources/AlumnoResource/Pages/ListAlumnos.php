<?php

namespace App\Filament\Resources\AlumnoResource\Pages;

use App\Filament\Resources\AlumnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlumnos extends ListRecords
{
    protected static string $resource = AlumnoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
