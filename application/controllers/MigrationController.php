<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MigrationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('migration');
        for($i = 1; $i <= 2; $i++) {
            if ($this->migration->version($i) === false) {
                echo $this->migration->error_string();
            } else {
                echo "Table Migrated Successfully.";
            }
        }
    }

}

/* End of file MigrationController.php and path \application\controllers\MigrationController.php */
