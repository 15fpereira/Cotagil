<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Users::class);
         $this->call(Produtos::class);
         $this->call(Categorias::class);
         $this->call(EnderecosSeeder::class);
    }
}
