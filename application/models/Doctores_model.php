<?php
class Doctores_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function doctores_list(){
        $query = $this->db->get('doctor');
        return $query->result();
    }
     
    public function get_doctores_by_id($id){
        $query = $this->db->get_where('doctor', array('idDoctor' => $id));
        return $query->row();
    }
 
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('idDoctor');
 
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion')
        );
        if (empty($id)) {
            return $this->db->insert('doctor', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('doctor', $data);
        }
    }
     
    public function delete($id)
    {
        $this->db->where('idDoctor', $id);
        return $this->db->delete('doctor');
    } 
}