<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Profesiones;

class crudTest extends TestCase
	
{
	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @test
     */
	public function home() {
		factory(Profesiones::class, 15)->create();
		$user = factory(User::class)->create([
			'password' => bcrypt('126126'),
		]);
		$this->get('/')
		->assertStatus(200);
		
		$this->assertCredentials([
			'name' => $user->name,
			'email' => $user->email,
			'password' => '126126'
		]);
	}
	/** @test */
	public function registrado_un_usuario() {
		$profesion = factory(Profesiones::class)->create();
		$this->post('crear-usuario',[
			'name' => 'Miguel Bonifaz',
			'email' => 'miguelbonifaz126@gmail.com',
			'profesiones' => $profesion->id,
			'asunto' => 'De hecho, esta carrera fue algo que nunca lo planifique, simplemente fue una materia donde enseñaban diseño web, y derrepente me enamore del codigo y por ende lo que las tecnologías frontend, y un poco de backend de php con Laravel, por cierto, hermosisimo ese Framework :D'
		])
		->assertRedirect('/');

		$this->assertEquals(1, User::count());
	}
}
