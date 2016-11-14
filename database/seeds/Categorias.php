<?php

use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categorias::class, 10)->create();
    }
}
