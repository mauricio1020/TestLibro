<?php

use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Autor::class,20)->create();
    }
}
