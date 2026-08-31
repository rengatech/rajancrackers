<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Products';

    protected static ?string $navigationLabel = 'Product';

    protected static ?int $navigationSort = 1;


    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(1)
            ->schema([

                Forms\Components\TextInput::make('tamil_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($set, $state) {
                        $set('url_slug', str::slug($state));
                        $set('seo_title', $state);
                    }),

                Forms\Components\TextInput::make('url_slug')
                    ->required()
                    ->maxLength(255)
                    ->hidden(),

                Forms\Components\TextInput::make('seo_title')
                    ->required()
                    ->maxLength(255)
                    ->hidden(),

                // Forms\Components\TextInput::make('description')
                // ->required()
                // ->maxLength(255),

                RichEditor::make('description')
                    ->required()
                    ->hidden(),

                Select::make('category_id')
                    ->label('category')
                    ->relationship('category', 'category')
                    ->required()
                    ->preload()
                    ->searchable(),

                Select::make('unit')
                    ->label('Unit')
                    ->options([
                        '1Box' => '1Box',
                        '1Pkt' => '1Pkt',
                        '1Pcs' => '1Pcs',
                        '1Pce' =>  '1Pce',
                        '10Pcs/Box'=>'10Pcs/Box',
                        '10Pcs/1Box'=>'10Pcs/1Box',
                        '5Pcs/1Box'=>'5Pcs/1Box',
                        '5Pcs/Tube'=>'5Pcs/Tube',
                        '1Pce/Tube'=>'1Pce/Tube',
                        '3Pcs/Box'=>'3Pcs/Box',
                        '5Pcs/Box'=>'5Pcs/Box',
                        '5Pieces'=>'5Pieces',
                        '4Pcs/Box'=>'4Pcs/Box',
                        '2Pcs/Box'=>'2Pcs/Box',
                        '8Pcs'=>'8Pcs',
                        '10PKT'=>'10PKT',
                        '1Bundle'=>'1Bundle',
                        '10Box'=>'10Box',
                        


                    ])
                    ->required(),

                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')->image()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tamil_name'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.category'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('out_of_stock')
                    ->label('Out of Stock'),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
                Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\RestoreBulkAction::make(),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
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
             'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
