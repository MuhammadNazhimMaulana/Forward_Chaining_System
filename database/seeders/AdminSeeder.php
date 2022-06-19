<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('demodemo123'),
            'hint' => 'coce'
        ]);
    }
}
