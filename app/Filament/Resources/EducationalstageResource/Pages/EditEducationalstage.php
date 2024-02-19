<?php

namespace App\Filament\Resources\EducationalstageResource\Pages;

use App\Filament\Resources\EducationalstageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEducationalstage extends EditRecord
{
    protected static string $resource = EducationalstageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
