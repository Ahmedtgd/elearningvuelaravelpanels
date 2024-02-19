<?php

namespace App\Filament\Student\Resources\QuizformResource\Pages;

use App\Filament\Student\Resources\QuizformResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuizform extends EditRecord
{
    protected static string $resource = QuizformResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
           // Actions\DeleteAction::make(),
        ];
    }
}
