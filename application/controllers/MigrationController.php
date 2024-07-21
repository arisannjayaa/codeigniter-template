<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MigrationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->database();
    }

    public function index()
    {
		$this->drop_all_tables();
        $this->load->library('migration');
        for($i = 1; $i <= 2; $i++) {
            if ($this->migration->version($i) === false) {
                echo $this->migration->error_string();
            } else {
                echo "Table Migrated Successfully.";
            }
        }
    }

	public function drop_all_tables() {
		$this->db->query('SET FOREIGN_KEY_CHECKS = 0');
		$tables = $this->db->list_tables();
		foreach ($tables as $table) {
			$this->db->query("DROP TABLE IF EXISTS `$table`");
		}

		$this->db->query('SET FOREIGN_KEY_CHECKS = 1');
	}

}

/* End of file MigrationController.php and path \application\controllers\MigrationController.php */
