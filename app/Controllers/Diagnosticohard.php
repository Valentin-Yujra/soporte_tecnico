<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\XdianosticoHard;
class Diagnosticohard extends Controller{

    public function index()
	{
		return view('Soporte/DIAG_PROB_HARD');
	}

}