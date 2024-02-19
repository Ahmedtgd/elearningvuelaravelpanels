<?php

namespace App\Filament\Student\Resources\QuizformResource\Pages;

use App\Filament\Student\Resources\QuizformResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQuizform extends ViewRecord
{
    protected static string $resource = QuizformResource::class;

    protected function getHeaderActions(): array
    {
        return [
          //  Actions\EditAction::make(),
        ];
    }
}
