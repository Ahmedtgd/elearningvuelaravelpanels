<?php

namespace App\Filament\Teacher\Resources\QuizformResource\Pages;

use App\Filament\Teacher\Resources\QuizformResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuizform extends EditRecord
{
    protected static string $resource = QuizformResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
