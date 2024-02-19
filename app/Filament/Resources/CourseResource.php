<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
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
class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('course_name')
                ->minLength(2)
                ->maxLength(255),

            TextInput::make('course_description')
                ->minLength(2)
                ->maxLength(225),

            TextInput::make('course_duration')
                ->type('number'),

            TextInput::make('course_price')
                ->type('number'),

            TextInput::make('course_rating')
                ->type('number'),

            Select::make('user_id')
                ->options(User::pluck('name', 'id')->toArray())
                ->required(),

            Select::make('category_id')
                ->options(Category::pluck('name', 'id')->toArray())
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course_name'),
                TextColumn::make('course_description'),
                TextColumn::make('course_duration'),
                TextColumn::make('course_price'),
                TextColumn::make('course_rating'),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
