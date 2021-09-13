<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Xoftware;
class Software extends Controller{

    public function index()
	{
		return view('Soporte/software');
	}

}