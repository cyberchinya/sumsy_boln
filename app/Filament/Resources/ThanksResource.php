<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThanksResource\Pages;
use App\Filament\Resources\ThanksResource\RelationManagers;
use App\Models\Thank;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThanksResource extends Resource
{
    protected static ?string $model = Thank::class;


    protected static function getNavigationLabel(): string
    {
        return __('Спасибо доктор!');
    }

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->label('Имя')
                        ->required(),
                    TextInput::make('email')
                        ->label('E-mail')
                        ->required(),
                    TextInput::make('phone')
                        ->label('Телефон')
                        ->required(),
                    Forms\Components\Textarea::make('message')
                        ->label('Сообщение')
                        ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Имя'),
                TextColumn::make('email')->label('E-mail'),
                TextColumn::make('phone')->label('Телефон'),
                TextColumn::make('message')->label('Сообщение')->limit(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->modalHeading('Просмотр благодарности'),
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
            'index' => Pages\ListThanks::route('/'),
            'create' => Pages\CreateThanks::route('/create'),
            'edit' => Pages\EditThanks::route('/{record}/edit'),
            //'view' => Pages\ViewThanks::route('/{record}'),
        ];
    }
}
