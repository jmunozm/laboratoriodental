<?php
class Pacientes_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function pacientes_list(){
        $query = $this->db->get('paciente');
        return $query->result();
    }
     
    public function get_pacientes_by_id($id){
        $query = $this->db->get_where('paciente', array('idPaciente' => $id));
        return $query->row();
    }
 
    public function createOrUpdate(){
        $this->load->helper('url');
        $id = $this->input->post('idPaciente');
 
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion')
        );
        if (empty($id)) {
            return $this->db->insert('paciente', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('paciente', $data);
        }
    }
     
    public function delete($id){
        $this->db->where('idPaciente', $id);
        return $this->db->delete('paciente');
    } 
}