<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::Create([
            'name' => 'Europe',
            'code' => 'eu',
            'flag' => 'images/flag/eu.jpg',
        ]);

        Country::Create([
            'name' => 'Singapore',
            'code' => 'sg',
            'flag' => 'images/flag/sg.jpg',
        ]);

        Country::Create([
            'name' => 'United States',
            'code' => 'us',
            'flag' => 'images/flag/us.jpg',
        ]);
    }
}
