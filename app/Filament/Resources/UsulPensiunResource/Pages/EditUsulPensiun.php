<?php

namespace App\Filament\Resources\UsulPensiunResource\Pages;

use App\Filament\Resources\UsulPensiunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsulPensiun extends EditRecord
{
    protected static string $resource = UsulPensiunResource::class;

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
