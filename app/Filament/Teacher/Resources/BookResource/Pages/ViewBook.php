<?php

namespace App\Filament\Teacher\Resources\BookResource\Pages;

use App\Filament\Teacher\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBook extends ViewRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
