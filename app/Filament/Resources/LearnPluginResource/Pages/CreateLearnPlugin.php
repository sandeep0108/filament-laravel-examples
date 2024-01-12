<?php

namespace App\Filament\Resources\LearnPluginResource\Pages;

use App\Filament\Resources\LearnPluginResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateLearnPlugin extends CreateRecord
{
    protected static string $resource = LearnPluginResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make('create_success')
            ->title("Plugin created has been successfully!")
            ->success();
    }
}
