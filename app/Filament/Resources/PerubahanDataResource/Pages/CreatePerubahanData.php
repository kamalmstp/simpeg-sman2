<?php

namespace App\Filament\Resources\PerubahanDataResource\Pages;

use App\Filament\Resources\PerubahanDataResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePerubahanData extends CreateRecord
{
    protected static string $resource = PerubahanDataResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
