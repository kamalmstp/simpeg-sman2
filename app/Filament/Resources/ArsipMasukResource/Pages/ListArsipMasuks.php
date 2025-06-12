<?php

namespace App\Filament\Resources\ArsipMasukResource\Pages;

use App\Filament\Resources\ArsipMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArsipMasuks extends ListRecords
{
    protected static string $resource = ArsipMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
