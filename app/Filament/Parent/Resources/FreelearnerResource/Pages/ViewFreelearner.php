<?php

namespace App\Filament\Parent\Resources\FreelearnerResource\Pages;

use App\Filament\Parent\Resources\FreelearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFreelearner extends ViewRecord
{
    protected static string $resource = FreelearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
