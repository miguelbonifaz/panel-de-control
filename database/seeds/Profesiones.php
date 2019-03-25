<?php

use Illuminate\Database\Seeder;

class Profesiones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Profesiones::class, 15)->create();
	}
	
}
