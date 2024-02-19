<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizformResource\Pages;
use App\Filament\Resources\QuizformResource\RelationManagers;
use App\Models\Quizform;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Quiz;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;



class QuizformResource extends Resource
{
    protected static ?string $model = Quizform::class;

    protected static ?string $navigationIcon = 'heroicon-m-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                TextInput::make( 'title')
                ->minLength(2)
                ->maxLength(225),

                Select::make('quiz_id')
                ->options(Quiz::pluck('name', 'id')->toArray()),
               // ->required(),


                Select::make('teacher_id')
                ->options(User::pluck('name', 'id')->toArray())
                ->required(),

                Select::make('student_id')
                ->options(User::pluck('name', 'id')->toArray())
                ->required(),

                TextInput::make( 'note')
                ->minLength(2)
                ->maxLength(225),

                TextInput::make( 'quiz_results')
                ->minLength(2)
                ->maxLength(225),

                FileUpload::make('docx_file')
                ->multiple()
                ->openable()
                ->downloadable(),

                FileUpload::make('pdf_file')
                ->multiple()
                ->openable()
                ->downloadable(),

                FileUpload::make('video_files')
                ->multiple()
                ->openable()
                ->downloadable(),


                TextInput::make( 'feedback')
                ->minLength(2)
                ->maxLength(225),




                Repeater::make('question')
                ->schema([


                  //  SpatieMediaLibraryFileUpload::make('image_files'),

                    FileUpload::make('image_files')
                    ->multiple()
                    ->openable()
                    ->downloadable(),

                    TextInput::make( 'question')
                     ->maxLength(225),

                     TextInput::make( 'rightanswer')
                     ->maxLength(225),

                     TextInput::make( 'solve1')
                     ->maxLength(225),

                     TextInput::make( 'solve2')
                     ->maxLength(225),

                     TextInput::make( 'solve3')
                     ->maxLength(225),

                     TextInput::make( 'solve4')
                     ->maxLength(225),







                ]),


            ]);


    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title'),
                TextColumn::make('quiz_results'),
                TextColumn::make('quiz_id'),
                TextColumn::make('teacher_id'),
                TextColumn::make('student_id'),
               // SpatieMediaLibraryImageColumn::make('image_files') ->conversion('thumbs'),
            /*  ImageColumn::make('image_files')
                ->circular()
                ->stacked()
                ->ring(5),*/




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
            'index' => Pages\ListQuizforms::route('/'),
            'create' => Pages\CreateQuizform::route('/create'),
            'edit' => Pages\EditQuizform::route('/{record}/edit'),
        ];
    }
}
