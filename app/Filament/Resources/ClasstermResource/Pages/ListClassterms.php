<?php

namespace App\Filament\Resources\ClasstermResource\Pages;

use App\Filament\Resources\ClasstermResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassterms extends ListRecords
{
    protected static string $resource = ClasstermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
