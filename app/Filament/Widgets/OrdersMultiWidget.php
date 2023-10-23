<?php

namespace App\Filament\Widgets;

use Kenepa\MultiWidget\MultiWidget;

class OrdersMultiWidget extends MultiWidget
{
    public array $widgets = [
        LatestOrders::class
    ];
}
