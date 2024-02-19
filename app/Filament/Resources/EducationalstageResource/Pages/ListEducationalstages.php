<?php

namespace App\Filament\Resources\EducationalstageResource\Pages;

use App\Filament\Resources\EducationalstageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEducationalstages extends ListRecords
{
    protected static string $resource = EducationalstageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
