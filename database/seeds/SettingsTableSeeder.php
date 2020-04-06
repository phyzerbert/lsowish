<?php

use Illuminate\Database\Seeder;

use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'helpcoddelivery@gmail.com',
            'whatsapp' => '+60177163578',
            'phone_number' => '+60177163578',
            'header_text' => 'Free 5 Day Shipping On Online Orders 100+',
        ]);
    }
}
