<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends CI_Controller {

	public function error_404()
	{
		$this->load->view('errors/error404_view');
	}
}
