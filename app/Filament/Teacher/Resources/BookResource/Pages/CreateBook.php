<?php

namespace App\Filament\Teacher\Resources\BookResource\Pages;

use App\Filament\Teacher\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
