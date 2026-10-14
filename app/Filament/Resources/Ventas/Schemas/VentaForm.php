<?php

namespace App\Filament\Resources\Ventas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class VentaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numeroOrden')
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                Select::make('producto_id')
                    ->label('Producto')
                    ->relationship('producto', 'nombre')
                    ->required(),
                Select::make('cliente_id')
                    ->label('Cliente')
                    ->relationship('cliente', 'nombre')
                    ->required(),
                Select::make('transporte_id')
                    ->label('Transporte')
                    ->relationship('transporte', 'NombreTransportista')
                    ->required(),

            ]);
    }
}
