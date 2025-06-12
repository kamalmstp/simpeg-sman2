<?php

namespace App\Filament\Resources\ArsipMasukResource\Pages;

use App\Filament\Resources\ArsipMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArsipMasuk extends CreateRecord
{
    protected static string $resource = ArsipMasukResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
