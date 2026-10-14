<?php

namespace App\Filament\Resources\Transportes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransporteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('NumeroGuia')
                    ->required(),
                TextInput::make('NombreTransportista')
                    ->required(),
                Select::make('Estado')
                    ->options([
                        'Activo' => 'Activo',
                        'Inactivo' => 'Inactivo',
                    ])
                    ->required(),
            ]);
    }
}
