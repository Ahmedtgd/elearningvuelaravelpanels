<?php

namespace App\Filament\Parent\Resources;

use App\Filament\Parent\Resources\LessonResource\Pages;
use App\Filament\Parent\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Course;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('lesson_title')
                ->minLength(2)
                ->maxLength(225),

            TextInput::make('lesson_content')
                ->minLength(2)
                ->maxLength(225),

            TextInput::make('lesson_duration')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make( 'lesson_order')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make( 'docx_file')
                ->minLength(2)
                ->maxLength(225),

            TextInput::make('pdf_file')
                ->minLength(2)
                ->maxLength(225),

            TextInput::make('image_files')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make( 'video_files')
                ->minLength(2)
                ->maxLength(225),


            Select::make('user_id')
                ->options(User::pluck('name', 'id')->toArray())
                ->required(),

            Select::make('lesson_course_id')
                ->options(Course::pluck('course_name', 'id')->toArray())
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('lesson_title'),
                TextColumn::make('lesson_content'),
                TextColumn::make('lesson_duration'),
                TextColumn::make( 'lesson_order'),
                TextColumn::make('docx_file'),
                TextColumn::make('pdf_file'),
                TextColumn::make('image_files'),
                TextColumn::make( 'video_files'),
                TextColumn::make('user_id'),
                TextColumn::make('lesson_course_id'),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
