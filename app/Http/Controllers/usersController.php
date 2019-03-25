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
		return view('create');
	}

	public function details() {
		return view('details');
	}
}
