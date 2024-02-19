<?php

namespace App\Filament\Student\Resources\QuizformResource\Pages;

use App\Filament\Student\Resources\QuizformResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuizforms extends ListRecords
{
    protected static string $resource = QuizformResource::class;

    protected function getHeaderActions(): array
    {
        return [
         //   Actions\CreateAction::make(),
        ];
    }
}
