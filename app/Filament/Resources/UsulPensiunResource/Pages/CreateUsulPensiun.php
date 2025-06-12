<?php

namespace App\Filament\Resources\UsulPensiunResource\Pages;

use App\Filament\Resources\UsulPensiunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsulPensiun extends CreateRecord
{
    protected static string $resource = UsulPensiunResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
