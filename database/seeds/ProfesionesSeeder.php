<?php

use Illuminate\Database\Seeder;
use App\Profesiones;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesiones::create([
			'profesion' => 'Frontend Developer'
		]);
        Profesiones::create([
			'profesion' => 'Backend Developer'
		]);
        Profesiones::create([
			'profesion' => 'DevOps'
		]);
        Profesiones::create([
			'profesion' => 'Diseñod Web'
		]);
        Profesiones::create([
			'profesion' => 'Javascript Developer'
		]);
        Profesiones::create([
			'profesion' => 'FullStack Developer'
		]);
    }
}
