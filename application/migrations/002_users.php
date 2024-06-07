<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Users extends CI_Migration
{
    protected $tableName  = 'users';

    public function up()
    {
        // Definisikan kolom untuk tabel users
        $this->dbforge->add_field([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'username' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'password' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'role_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => TRUE
            ],
        ]);

        // Tambahkan primary key
        $this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP");
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        // Tambahkan foreign key untuk kolom role_id
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE RESTRICT ON UPDATE CASCADE');

        // Buat tabel users
        $this->dbforge->create_table($this->tableName);
		$this->db->insert($this->tableName, [
            'username'   => 'admin',
			'password'   => password_hash('Password1', PASSWORD_BCRYPT),
			'role_id'    => 1,
			'email'      => 'admin@mail.com',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function down()
    {
        // Hapus tabel users
        $this->dbforge->drop_table($this->tableName);
    }
}

/* End of file 20240606231741_users.php and path \application\migrations\20240606231741_users.php */
