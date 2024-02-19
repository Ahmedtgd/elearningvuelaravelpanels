<?php

namespace App\Filament\Parent\Resources\LessonResource\Pages;

use App\Filament\Parent\Resources\LessonResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLesson extends CreateRecord
{
    protected static string $resource = LessonResource::class;
}
