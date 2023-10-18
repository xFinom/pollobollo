<?php

namespace Database\Seeders;

use App\Models\Show;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shows = [
            [
                'name' => 'Show Infantil',
                'description' => 'Show apto para toda la familia, ven y diviertete',
                'duration' => 4,
                'price' => 150.00,
            ],
            [
                'name' => 'Show Para Adultos',
                'description' => 'Show especial para adultos, ven y diviertete',
                'duration' => 6,
                'price' => 450.00,
            ],
            [
                'name' => 'Show Para BabyShower',
                'description' => 'Ameniza tu babyshower con el payasito Pollo Bollo!',
                'duration' => 3,
                'price' => 300.00,
            ]
        ];

        foreach ($shows as $show) {
            Show::create($show);
        }

    }
}
