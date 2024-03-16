<?php

namespace App\Filament\Resources\KitabResource\Pages;

use App\Filament\Resources\KitabResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKitab extends EditRecord
{
    protected static string $resource = KitabResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
