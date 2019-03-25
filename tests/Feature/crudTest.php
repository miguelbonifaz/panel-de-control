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
		factory(User::class, 15)->create([
			'password' => bcrypt('126126'),
		]);

		$this->get('/')
		->assertStatus(200);
		
		// $this->assertCredentials([
		// 	'name' => $user->name,
		// 	'email' => $user->email,
		// 	'password' => '126126'
		// ]);
	}
	
	// public function 
}
