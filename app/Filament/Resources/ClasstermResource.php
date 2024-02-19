<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClasstermResource\Pages;
use App\Filament\Resources\ClasstermResource\RelationManagers;
use App\Models\Classterm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Educationalstage;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class ClasstermResource extends Resource
{
    protected static ?string $model = Classterm::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

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

                Select::make('user_id')
                ->options(User::pluck('name', 'id')->toArray())
               // ->displayUsingLabels()
                ->required(),
                Select::make('educationalstage_id')
                ->options(Educationalstage::pluck('stage_name', 'id')->toArray())
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
                TextColumn::make('user_id'),
                TextColumn::make('educationalstage_id'),
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
            'index' => Pages\ListClassterms::route('/'),
            'create' => Pages\CreateClassterm::route('/create'),
            'edit' => Pages\EditClassterm::route('/{record}/edit'),
        ];
    }
}
