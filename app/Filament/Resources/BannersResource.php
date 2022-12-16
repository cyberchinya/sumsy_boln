<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannersResource\Pages;
use App\Filament\Resources\BannersResource\RelationManagers;
use App\Models\Banners;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BannersResource extends Resource
{
    protected static ?string $model = Banners::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Баннеры на сайте');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->label('Название баннера')
                        ->required(),
                    Forms\Components\Textarea::make('description')
                        ->label('Описание')
                        ->required(),
                    Forms\Components\Select::make('position')->label('Позиция на странице')->options([
                        'top' => 'Верх',
                        'bottom' => 'Низ',
                        'left' => 'Лево',
                        'right' => 'Право',
                    ])->default('left'),
                    FileUpload::make('image')->label('Изображение')->directory('banners')->image(),
                    TextInput::make('url'),
                    Forms\Components\Textarea::make('code')->label('Код банера'),
                    Toggle::make('visible')->label('Отобразить на сайте')->default(false),
                     Forms\Components\TextInput::make('sort')
                         ->default(0)
                         ->label('Порядковый номер')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Название баннера')->sortable()->searchable(),
                TextColumn::make('position')->label('Расположение')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('visible')->label('Виден')->boolean()->searchable(),
//                Tables\Columns\IconColumn::make('is_published')->searchable(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanners::route('/create'),
            'edit' => Pages\EditBanners::route('/{record}/edit'),
        ];
    }
}
