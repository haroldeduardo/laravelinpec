<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class modeloequipamiento_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nos permite rellenar  nuestra base de datos
        DB::table('modeloequipamiento')->insert
        ([
            nombre_modeloequipamiento=> 'chaleco'
        ]);
    }
}
