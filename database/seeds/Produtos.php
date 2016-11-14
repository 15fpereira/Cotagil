<?php

use Illuminate\Database\Seeder;

class Produtos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Produtos::class, 1500)->create();
    }
}
