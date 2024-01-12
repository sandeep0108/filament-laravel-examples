<?php

namespace App\Filament\Resources\LearnPluginResource\Pages;

use App\Filament\Resources\LearnPluginResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearnPlugins extends ListRecords
{
    protected static string $resource = LearnPluginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Plugin')
        ];
    }
}
