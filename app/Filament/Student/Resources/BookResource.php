<?php

namespace App\Filament\Student\Resources;

use App\Filament\Student\Resources\BookResource\Pages;
use App\Filament\Student\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Category;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([




                TextInput::make('book_title')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make('book_author')
                ->minLength(1)
                ->maxLength(225),

                TextInput::make('book_description')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make('book_price')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make('book_rating')
                ->minLength(1)
                ->maxLength(225),

                TextInput::make('book_publication_date')
                ->minLength(1)
                ->maxLength(225),


                Select::make('user_id')
                ->options(User::pluck('name', 'id')->toArray())
               // ->displayUsingLabels()
                ->required(),

                Select::make('category_id')
                ->options(Category::pluck('name', 'id')->toArray())
               // ->displayUsingLabels()
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('book_title'),
                TextColumn::make('book_author'),
                TextColumn::make('book_description'),
                TextColumn::make('book_price'),
                TextColumn::make('book_rating'),
                TextColumn::make('book_publication_date'),
                TextColumn::make('user_id'),
                TextColumn::make('category_id'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
