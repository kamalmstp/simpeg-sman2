<?php

namespace App\Filament\Resources\ArsipKeluarResource\Pages;

use App\Filament\Resources\ArsipKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArsipKeluar extends CreateRecord
{
    protected static string $resource = ArsipKeluarResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
