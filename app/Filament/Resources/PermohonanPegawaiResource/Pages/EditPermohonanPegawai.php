<?php

namespace App\Filament\Resources\PermohonanPegawaiResource\Pages;

use App\Filament\Resources\PermohonanPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermohonanPegawai extends EditRecord
{
    protected static string $resource = PermohonanPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
