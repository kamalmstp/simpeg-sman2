<?php

namespace App\Filament\Resources\UsulPensiunResource\Pages;

use App\Filament\Resources\UsulPensiunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsulPensiuns extends ListRecords
{
    protected static string $resource = UsulPensiunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
