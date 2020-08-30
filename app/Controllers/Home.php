<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => ' Home | Dev'
		];

		echo view('templates/header', $data);
		echo view('templates/sidebar');
		echo view('templates/topbar');
		echo view('home/index');
		echo view('templates/footer');
	}


	//--------------------------------------------------------------------

}
