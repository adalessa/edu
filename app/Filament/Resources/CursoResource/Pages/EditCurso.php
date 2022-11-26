<?php

namespace App\Filament\Resources\CursoResource\Pages;

use App\Filament\Resources\CursoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurso extends EditRecord
{
    protected static string $resource = CursoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
