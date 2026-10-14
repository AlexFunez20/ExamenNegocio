<?php

namespace App\Filament\Resources\Ventas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class VentasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numeroOrden')
                    ->searchable(),
                TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('producto.nombre')
                    ->label('Producto')
                    ->searchable(),
                TextColumn::make('cliente.nombre')
                    ->label('Cliente')
                    ->searchable(),
                TextColumn::make('transporte.NombreTransportista')
                    ->label('Transporte')
                    ->searchable(),
            ])
            ->filters([
                Selectfilter::make('transporte_id')
                    ->label('Transporte')
                    ->relationship('transporte', 'NombreTransportista'),
                selectFilter::make('cliente_id')
                    ->label('Cliente')
                    ->relationship('cliente', 'nombre'),
                selectFilter::make('producto_id')
                    ->label('Producto')
                    ->relationship('producto', 'nombre'),
                    
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
