<?php

namespace App\Filament\Student\Resources\FreelearnerResource\Pages;

use App\Filament\Student\Resources\FreelearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreelearner extends EditRecord
{
    protected static string $resource = FreelearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
