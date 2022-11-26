<?php

namespace App\Http\Livewire;

use App\Models\User;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ShowNote extends Component implements HasTable
{
    use InteractsWithTable;

    public function render(): View
    {
        return view('livewire.show-note');
    }

    public function getTableQuery(): Builder
    {
        return User::query();
    }

    /**
     * @return array<int,Column>
     */
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('email'),
            TextColumn::make('created_at')->dateTime(),
        ];
    }
}
