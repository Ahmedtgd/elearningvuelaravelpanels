<?php

namespace App\Filament\Teacher\Resources\QuizformResource\Pages;

use App\Filament\Teacher\Resources\QuizformResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQuizform extends ViewRecord
{
    protected static string $resource = QuizformResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
