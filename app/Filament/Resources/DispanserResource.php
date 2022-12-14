<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DispanserResource\Pages;
use App\Filament\Resources\DispanserResource\RelationManagers;
use App\Models\Dispanser;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DispanserResource extends Resource
{
    protected static ?string $model = Dispanser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Диспанцеризация');
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
            'index' => Pages\ListDispansers::route('/'),
            'create' => Pages\CreateDispanser::route('/create'),
            'edit' => Pages\EditDispanser::route('/{record}/edit'),
        ];
    }
}
