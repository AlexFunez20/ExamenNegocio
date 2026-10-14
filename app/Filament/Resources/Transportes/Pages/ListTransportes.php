<?php

namespace App\Filament\Resources\Transportes\Pages;

use App\Filament\Resources\Transportes\TransporteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTransportes extends ListRecords
{
    protected static string $resource = TransporteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
