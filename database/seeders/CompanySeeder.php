<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Company;


class CompanySeeder extends Seeder
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
                'company_name' => 'Samsung Galaxy',

            ],

            [
                'company_name' => 'DownTown',

            ],

            [
                'company_name' => 'KK-Tech',

            ],

            [
                'company_name' => 'KK-Empire',

            ],



        ];




        foreach ($products as $key => $value) {
            Company::create($value);
        }


    }
}
