<?php

namespace App\Filament\Resources\ArsipMasukResource\Pages;

use App\Filament\Resources\ArsipMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArsipMasuk extends EditRecord
{
    protected static string $resource = ArsipMasukResource::class;

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
