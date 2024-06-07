<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		if (!$this->auth->check()) {
			redirect(base_url('login'));
		}

		$this->auth->protect(1);
		return view('dashboard');
    }
}

/* End of file DashboardController.php and path \application\controllers\DashboardController.php */
