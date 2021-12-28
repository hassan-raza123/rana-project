<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                'service_name' => 'lunch-time',

            ],

            [
                'service_name' => 'coeperation',

            ],

            [
                'service_name' => 'sinceration',

            ],

            [
                'service_name' => 'attemptation',

            ],



        ];

        foreach ($products as $key => $value) {
            Service::create($value);
        }


    }
}
