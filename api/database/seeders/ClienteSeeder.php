<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create(['name' => 'cliente01']);
        Cliente::create(['name' => 'cliente02']);
    }
}
