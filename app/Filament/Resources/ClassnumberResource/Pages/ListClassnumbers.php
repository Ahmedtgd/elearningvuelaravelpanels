<?php

namespace App\Filament\Resources\ClassnumberResource\Pages;

use App\Filament\Resources\ClassnumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassnumbers extends ListRecords
{
    protected static string $resource = ClassnumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
