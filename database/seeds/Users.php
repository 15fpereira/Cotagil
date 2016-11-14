<?php

use Illuminate\Database\Seeder;
use Ecommerce\User as Usuario;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 100)->create();
    }
}
