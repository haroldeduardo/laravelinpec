<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    

        #$this->call(modeloequipamiento_seeder::class);
        $this->call(Porductos_seeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
