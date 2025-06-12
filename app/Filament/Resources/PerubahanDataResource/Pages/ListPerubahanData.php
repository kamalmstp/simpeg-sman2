<?php

namespace App\Filament\Resources\PerubahanDataResource\Pages;

use App\Filament\Resources\PerubahanDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerubahanData extends ListRecords
{
    protected static string $resource = PerubahanDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
