<?php

namespace App\Filament\Resources\FreelearnerResource\Pages;

use App\Filament\Resources\FreelearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFreelearners extends ListRecords
{
    protected static string $resource = FreelearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
