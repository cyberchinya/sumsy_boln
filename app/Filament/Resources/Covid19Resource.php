<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Covid19Resource\Pages;
use App\Filament\Resources\Covid19Resource\RelationManagers;
use App\Models\Covid19;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Covid19Resource extends Resource
{
    protected static ?string $model = Covid19::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Коронавирус');
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
            'index' => Pages\ListCovid19s::route('/'),
            'create' => Pages\CreateCovid19::route('/create'),
            'edit' => Pages\EditCovid19::route('/{record}/edit'),
        ];
    }
}
