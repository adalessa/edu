<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesorResource\Pages;
use App\Filament\Resources\ProfesorResource\RelationManagers;
use App\Models\User;
use App\RoleEnum;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfesorResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = 'Profesores';
    protected static ?string $slug = 'prefesor';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfesors::route('/'),
            'create' => Pages\CreateProfesor::route('/create'),
            'edit' => Pages\EditProfesor::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('role', RoleEnum::PROFESOR->name);
    }
}
