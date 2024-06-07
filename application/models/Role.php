<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Model
{
    protected $table = 'roles';

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
}


/* End of file Role_model.php and path \application\models\Role_model.php */
