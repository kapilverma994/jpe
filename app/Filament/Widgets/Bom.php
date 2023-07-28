<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Forms\Components\Grid;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class Bom extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Bom Enquiries', Enquiry::where('type', 'bom')->count()),
            Card::make('Contact Enquiries', Enquiry::where('type', 'contact')->count())
        ];
    }
}
