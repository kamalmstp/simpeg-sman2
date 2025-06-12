<?php

namespace App\Filament\Resources\PerubahanDataResource\Pages;

use App\Filament\Resources\PerubahanDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerubahanData extends EditRecord
{
    protected static string $resource = PerubahanDataResource::class;

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
