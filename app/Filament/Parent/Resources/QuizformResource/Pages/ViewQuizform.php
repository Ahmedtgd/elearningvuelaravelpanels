<?php

namespace App\Filament\Parent\Resources\QuizformResource\Pages;

use App\Filament\Parent\Resources\QuizformResource;
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
