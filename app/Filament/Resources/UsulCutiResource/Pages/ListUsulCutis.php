<?php

namespace App\Filament\Resources\UsulCutiResource\Pages;

use App\Filament\Resources\UsulCutiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsulCutis extends ListRecords
{
    protected static string $resource = UsulCutiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
