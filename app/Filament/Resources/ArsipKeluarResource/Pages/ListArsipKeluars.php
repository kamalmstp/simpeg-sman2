<?php

namespace App\Filament\Resources\ArsipKeluarResource\Pages;

use App\Filament\Resources\ArsipKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArsipKeluars extends ListRecords
{
    protected static string $resource = ArsipKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
