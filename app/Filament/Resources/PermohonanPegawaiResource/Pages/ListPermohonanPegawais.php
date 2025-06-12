<?php

namespace App\Filament\Resources\PermohonanPegawaiResource\Pages;

use App\Filament\Resources\PermohonanPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermohonanPegawais extends ListRecords
{
    protected static string $resource = PermohonanPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
