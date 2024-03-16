<?php

namespace App\Filament\Resources\KitabResource\Pages;

use App\Filament\Resources\KitabResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKitabs extends ListRecords
{
    protected static string $resource = KitabResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
