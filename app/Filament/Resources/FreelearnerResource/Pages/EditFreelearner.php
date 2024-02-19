<?php

namespace App\Filament\Resources\FreelearnerResource\Pages;

use App\Filament\Resources\FreelearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreelearner extends EditRecord
{
    protected static string $resource = FreelearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
