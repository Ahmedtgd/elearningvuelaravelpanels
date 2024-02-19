<?php

namespace App\Filament\Parent\Resources\BookResource\Pages;

use App\Filament\Parent\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
