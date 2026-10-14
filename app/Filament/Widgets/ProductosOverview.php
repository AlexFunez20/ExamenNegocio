<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Producto;

class ProductosOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $productos = Producto::all();
        return [
                Stat::make ('Total Productos', $productos)
                ->description('Total de productos en la base de datos')
                ->value($productos->count()),

        ];
    }
}
