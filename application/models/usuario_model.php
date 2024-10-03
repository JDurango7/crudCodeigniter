<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function get_usuarios() {
        return $this->db->get('usuarios')->result();
    }

    public function create_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }

    public function get_usuario($id) {
        return $this->db->get_where('usuarios', ['id' => $id])->row();
    }

    public function update_usuario($id, $data) {
        return $this->db->update('usuarios', $data, ['id' => $id]);
    }

    public function delete_usuario($id) {
        return $this->db->delete('usuarios', ['id' => $id]);
    }
}
