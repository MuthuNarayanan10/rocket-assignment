<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$emp = file_get_contents("json/employee_data.json"); 
		$data['emp'] = json_decode($emp);
		$this->load->view('welcome_message',$data);
		// echo $data;
	}

}
