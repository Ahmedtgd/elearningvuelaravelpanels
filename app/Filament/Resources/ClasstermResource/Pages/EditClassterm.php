<?php

namespace App\Filament\Resources\ClasstermResource\Pages;

use App\Filament\Resources\ClasstermResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassterm extends EditRecord
{
    protected static string $resource = ClasstermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
