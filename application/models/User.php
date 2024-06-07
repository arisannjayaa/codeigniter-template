<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
	protected $table = 'users';
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function find($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row();
    }

    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

	public function findByEmail($email)
	{
		return $this->db->get_where($this->table, ['email' => $email])->row_array();
	}
}


/* End of file User_model.php and path \application\models\User_model.php */
