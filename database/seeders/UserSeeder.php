<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        $count = User::where('id', '!=', '0')->count();
        if ($count <= 0) {
            $user=User::create([
                'name' => 'Admin',
                'email' => 'admin@ranazulfiqar.com',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}
