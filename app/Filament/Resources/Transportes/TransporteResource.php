<?php

namespace App\Filament\Resources\Transportes;

use App\Filament\Resources\Transportes\Pages\CreateTransporte;
use App\Filament\Resources\Transportes\Pages\EditTransporte;
use App\Filament\Resources\Transportes\Pages\ListTransportes;
use App\Filament\Resources\Transportes\Schemas\TransporteForm;
use App\Filament\Resources\Transportes\Tables\TransportesTable;
use App\Models\Transporte;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TransporteResource extends Resource
{
    protected static ?string $model = Transporte::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TransporteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransportesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTransportes::route('/'),
            'create' => CreateTransporte::route('/create'),
            'edit' => EditTransporte::route('/{record}/edit'),
        ];
    }
}
