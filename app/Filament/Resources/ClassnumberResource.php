<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassnumberResource\Pages;
use App\Filament\Resources\ClassnumberResource\RelationManagers;
use App\Models\Classnumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Classterm;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class ClassnumberResource extends Resource
{
    protected static ?string $model = Classnumber::class;

    protected static ?string $navigationIcon = 'heroicon-m-user-group';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            TextInput::make('number')
            ->minLength(1)
            ->maxLength(225),

            TextInput::make('description')
            ->minLength(2)
            ->maxLength(225),

            Select::make('user_id')
            ->options(User::pluck('name', 'id')->toArray())
           // ->displayUsingLabels()
            ->required(),
            Select::make('classterm_id')
            ->options(Classterm::pluck('name', 'id')->toArray())
           // ->displayUsingLabels()
            ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('number'),
                TextColumn::make('description'),
                TextColumn::make('user_id'),
                TextColumn::make('classterm_id'),
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
            'index' => Pages\ListClassnumbers::route('/'),
            'create' => Pages\CreateClassnumber::route('/create'),
            'edit' => Pages\EditClassnumber::route('/{record}/edit'),
        ];
    }
}
