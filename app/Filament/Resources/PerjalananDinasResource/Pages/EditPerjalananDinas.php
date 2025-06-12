<?php

namespace App\Filament\Resources\PerjalananDinasResource\Pages;

use App\Filament\Resources\PerjalananDinasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerjalananDinas extends EditRecord
{
    protected static string $resource = PerjalananDinasResource::class;

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
