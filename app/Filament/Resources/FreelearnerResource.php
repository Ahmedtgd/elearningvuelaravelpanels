<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreelearnerResource\Pages;
use App\Filament\Resources\FreelearnerResource\RelationManagers;
use App\Models\Freelearner;
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
class FreelearnerResource extends Resource
{
    protected static ?string $model = Freelearner::class;

    protected static ?string $navigationIcon = 'heroicon-m-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make('description')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make('interests')
                ->minLength(2)
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
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('interests'),
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
            'index' => Pages\ListFreelearners::route('/'),
            'create' => Pages\CreateFreelearner::route('/create'),
            'edit' => Pages\EditFreelearner::route('/{record}/edit'),
        ];
    }
}
