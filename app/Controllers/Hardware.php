<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Xardware;
class Hardware extends Controller{

    public function index()
	{
		return view('Soporte/hardware');
	}
}