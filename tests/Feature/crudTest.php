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
		$user = factory(User::class)->create();
		$this->get('/')
		->assertStatus(200)
		->assertSee($user->name);
	}
	/** @test */
	public function formulario_donde_se_crea_un_usuario() {
		$this->withoutExceptionHandling();
		$this->get('/crear-usuario')
		->assertStatus(200)
		->assertSee('CREACIÓN DE USUARIO');
	} 
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

	/** @test */
	public function detalles_de_un_usuario() {
		$profesion = factory(Profesiones::class)->create();
		$user = factory(User::class)->create([
			'profesion_id' => $profesion->id
		]);
		$this->get("usuario/{$user->id}")
		->assertStatus(200)
		->assertSee($user->name);
	}

	/** @test */
	public function mostrando_informacion_cuando_se_edita_un_usuario() {
		$profesion = factory(Profesiones::class)->create();
		$user = factory(User::class)->create([
			'profesion_id' => $profesion->id
		]);
		$this->get("usuario/$user->id/edit")
		->assertStatus(200)
		->assertSee($user->name)
		->assertSee($user->email)
		->assertSee($user->asunto);
	}

	/** @test */
	public function guardando_informacion_cuando_se_edita_un_usario() {
		$this->withoutExceptionHandling();
		$profesion = factory(Profesiones::class)->create();
		$profesion2 = factory(Profesiones::class)->create();
		
		$user = factory(User::class)->create([
			'profesion_id' => $profesion->id
		]);
		$this->put("/usuario/$user->id/edit", [
			'name' => 'Miguel Bonifaz',
			'email' => 'miguelbonifaz126@gmail.com',
			'profesiones' => $profesion2->id,
			'asunto' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi praesentium deserunt harum! Eius, cumque'
		])
		->assertRedirect('/');

		$this->assertDatabaseHas('users', [
			'name' => 'Miguel Bonifaz',
			'email' => 'miguelbonifaz126@gmail.com',
			'profesion_id' => $profesion2->id,
			'asunto' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi praesentium deserunt harum! Eius, cumque'
		]);
	}

	/** @test */
	public function eliminando_un_usuario() {
		$profesion = factory(Profesiones::class)->create();
		$user = factory(User::class)->create([
			'profesion_id' => $profesion->id
		]);
		$this->delete("/usuario/$user->id")
		->assertRedirect('/');

		$this->assertEquals(0, User::count());
	}
}
