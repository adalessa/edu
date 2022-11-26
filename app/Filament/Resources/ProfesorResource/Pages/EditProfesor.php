<?php

namespace App\Filament\Resources\ProfesorResource\Pages;

use App\Filament\Resources\ProfesorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfesor extends EditRecord
{
    protected static string $resource = ProfesorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
