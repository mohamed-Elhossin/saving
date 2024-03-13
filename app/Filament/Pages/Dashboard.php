<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as PagesDashboard;
use Filament\Pages\Page;

class Dashboard extends PagesDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected static bool $isLazy = false;


    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }
}
