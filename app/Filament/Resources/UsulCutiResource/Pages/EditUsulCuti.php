<?php

namespace App\Filament\Resources\UsulCutiResource\Pages;

use App\Filament\Resources\UsulCutiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsulCuti extends EditRecord
{
    protected static string $resource = UsulCutiResource::class;

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
