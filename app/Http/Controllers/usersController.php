<?php

namespace App\Http\Controllers;

use App\{User, Profesiones, UserProfile};
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index() {
		$users = User::all();
		return view('index', compact(
			'users'
		));
	}

	public function crear() {
		$profesiones = Profesiones::all();
		return view('create', compact(
			'profesiones'
		));
	}

	public function details(User $user) {
		return view('details', compact(
			'user'
		));
	}

	public function store() {
		
		$data = request()->validate([
			'name' => 'required|between:3,40',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|between:6, 10',
			'profesiones' => 'required',
			'bio' => 'required|between:20, 255',
			'twitter' => ''
		], [
			'name.required' => 'El campo nombres es requerido',
			'email.required' => 'El campo correo es requerido',
			'password.required' => 'El campo password es requerido',
			'profesiones.required' => 'El campo profesión es requerido',
			'bio.required' => 'Este campo es requerido :)',
			
		]);
		
		if (!Profesiones::where('id',  $data['profesiones'])->exists()) { 
			return '¿Con que muy listo no?';
		}

		User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'profesion_id' => $data['profesiones'],
		]);
		
		UserProfile::create([
			'bio' => $data['bio'],
			'twitter' => $data['twitter']
		]);
		
		return redirect()->route('home');
	}
	
	public function edit(User $user) {
		$profesiones = Profesiones::all();
		return view('edit', compact(
			'user', 'profesiones'
		));
	}

	public function update(User $user) {
		$data = request()->validate([
			'name' => 'required|between:3,40',
			'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
			'profesiones' => 'required',
			'asunto' => 'required|between:40, 255'
		], [
			'name.required' => 'El campo nombres es requerido',
			'email.required' => 'El campo correo es requerido',
			'profesiones.required' => 'El campo profesión es requerido',
			'asunto.required' => 'Este campo es requerido :)',
			
		]);
		if (!Profesiones::where('id',  $data['profesiones'])->exists()) { 
			return '¿Con que muy listo no?';
		}
		$user->profesion_id = $data['profesiones'];
		$user->update($data);
		return redirect()->route('home');
	}

	public function destroy(User $user) {
		$user->delete();
		return redirect()->route('home');
	}
}
