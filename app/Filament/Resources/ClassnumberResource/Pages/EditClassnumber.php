<?php

namespace App\Filament\Resources\ClassnumberResource\Pages;

use App\Filament\Resources\ClassnumberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassnumber extends EditRecord
{
    protected static string $resource = ClassnumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
