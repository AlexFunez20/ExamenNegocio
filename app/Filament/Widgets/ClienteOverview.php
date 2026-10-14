<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Cliente;

class ClienteOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $clientes = Cliente::all();
        return [
            Stat::make ('Total Clientes', $clientes)
                ->description('Total de clientes en la base de datos')
                ->value($clientes->count()),
        ];
    }
}
