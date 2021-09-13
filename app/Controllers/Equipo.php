<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Xquipo;
class Equipo extends Controller
{
	public function index()
	{
		return view('Soporte/equipos_computacion');
	}
}
