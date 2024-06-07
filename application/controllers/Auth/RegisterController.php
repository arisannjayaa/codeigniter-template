<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		return view('auth/register');
    }
}

/* End of file RegisterController.php and path \application\controllers\Auth\RegisterController.php */
