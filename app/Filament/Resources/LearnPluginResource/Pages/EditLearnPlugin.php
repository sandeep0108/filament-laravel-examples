<?php

namespace App\Filament\Resources\LearnPluginResource\Pages;

use App\Filament\Resources\LearnPluginResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditLearnPlugin extends EditRecord
{
    protected static string $resource = LearnPluginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make('edit_success')
            ->title("Plugin updated has been successfully!")
            ->success();
    }

}
