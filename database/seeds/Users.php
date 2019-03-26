<?php

use Illuminate\Database\Seeder;
use App\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(User::class)->create([
			'name' => 'Miguel Bonifaz',
			'email' => 'miguelbonifaz126@gmail.com',
			'profesion_id' => 1,
			'asunto' => 'De hecho, esta carrera fue algo que nunca lo planifique, simplemente fue una materia donde enseñaban diseño web, y derrepente me enamore del codigo y por ende lo que son las tecnologías frontend, y un poco de backend de php con Laravel, por cierto, hermosisimo ese Framework :D'
		]);

        factory(User::class, 5)->create([
			'profesion_id' => 1
		]);
    }
}
