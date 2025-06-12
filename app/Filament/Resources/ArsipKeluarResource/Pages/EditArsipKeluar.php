<?php

namespace App\Filament\Resources\ArsipKeluarResource\Pages;

use App\Filament\Resources\ArsipKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArsipKeluar extends EditRecord
{
    protected static string $resource = ArsipKeluarResource::class;

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
