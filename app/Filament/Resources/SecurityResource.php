<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SecurityResource\Pages;
use App\Filament\Resources\SecurityResource\RelationManagers;
use App\Models\Security;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SecurityResource extends Resource
{
    protected static ?string $model = Security::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Охрана труда');
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
            'index' => Pages\ListSecurities::route('/'),
            'create' => Pages\CreateSecurity::route('/create'),
            'edit' => Pages\EditSecurity::route('/{record}/edit'),
        ];
    }
}
