<?php

namespace App\Http\Controllers;

use App\User;
use App\Profesiones;
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

	public function details() {
		return view('details');
	}

	public function store() {
		$data = request()->validate([
			'name' => 'required',
			'email' => 'required|email|unique:email',
			'profesiones' => 'required',
			'asunto' => 'required'
		], [
			'name.required' => 'El campo nombres es requerido',
			'email.required' => 'El campo correo es requerido',
			'profesiones.required' => 'El campo profesión es requerido',
			'asunto.required' => 'El campo asunto es requerido',
			
		]);
		if (!Profesiones::where('id',  $data['profesiones'])->exists()) { 
			return '¿Con que muy listo no?';
		}
		User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'profesion_id' => $data['profesiones'],
			'asunto' => $data['asunto'],
		]);
		
		return redirect()->route('home');
	}
}
