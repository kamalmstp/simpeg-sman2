<?php

namespace App\Filament\Resources\PerjalananDinasResource\Pages;

use App\Filament\Resources\PerjalananDinasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePerjalananDinas extends CreateRecord
{
    protected static string $resource = PerjalananDinasResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
