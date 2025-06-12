<?php

namespace App\Filament\Resources\UsulCutiResource\Pages;

use App\Filament\Resources\UsulCutiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsulCuti extends CreateRecord
{
    protected static string $resource = UsulCutiResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
