<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Catalog;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Symfony\Contracts\Service\Attribute\Required;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $pluralModelLabel = 'продукты';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form //внедрение зависимости тип (класс тот же самый тип) и переменная. После : то, что этот метод возвращает
    {
        // $catalogs = Catalog::all();
        $catalogs = Catalog::orderBy('name')->pluck('name', 'id')->toArray(); // pluck превращает объект в массив 2 параметра в нашем случае

        return $form
            ->schema([
                TextInput::make('name')->required(),
                Select::make('catalog_id')->options($catalogs)->required(),//сделали поле catalog id айди и добавили options из модели Cdtdlog
                TextInput::make('price'),
                TextInput::make('discount'),
                TextInput::make('size')->required(),
                TextInput::make('status')->required(),
                RichEditor::make('body')->columnSpan('full'),
                FileUpload::make('picture')->directory('products')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                ImageColumn::make('picture'),


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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
