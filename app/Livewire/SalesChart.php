<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Events;
use App\Models\GifDeliveries;
use App\Models\Rentals;

class SalesChart extends Component
{
    public function render()
    {
        $eventsCount = Events::count();
        $giftDeliveriesCount = GifDeliveries::count();
        $rentalsCount = Rentals::count();

        $data = [
            'labels' => ['Events', 'Gift Deliveries', 'Rentals'],
            'datasets' => [
                [
                    'data' => [$eventsCount, $giftDeliveriesCount, $rentalsCount],
                    'backgroundColor' => ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(255, 205, 86, 0.2)'],
                    'borderColor' => ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 205, 86, 1)'],
                    'borderWidth' => 1,
                ],
            ],
        ];

        return view('livewire.sales-chart', compact('data'));
    }
}
