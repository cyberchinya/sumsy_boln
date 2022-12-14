<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GrippResource\Pages;
use App\Filament\Resources\GrippResource\RelationManagers;
use App\Models\Gripp;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GrippResource extends Resource
{
    protected static ?string $model = Gripp::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Внимание грипп');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListGripps::route('/'),
            'create' => Pages\CreateGripp::route('/create'),
            'edit' => Pages\EditGripp::route('/{record}/edit'),
        ];
    }
}
