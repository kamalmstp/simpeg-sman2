<?php

namespace App\Filament\Resources\PermohonanPegawaiResource\Pages;

use App\Filament\Resources\PermohonanPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePermohonanPegawai extends CreateRecord
{
    protected static string $resource = PermohonanPegawaiResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
