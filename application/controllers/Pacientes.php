<?php
class Pacientes extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('pacientes_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
    }

    public function index(){
        $data['pacientes'] = $this->pacientes_model->pacientes_list();
        $data['title'] = 'Lista de pacientes ';
 
        $this->load->view('pacientes/list', $data);
    }

    public function create(){
        $data['title'] = 'Alta de Paciente';
        $this->load->view('pacientes/create', $data);
    }

    public function edit($id){
        $id = $this->uri->segment(3);
        $data = array();
        $data['title'] = 'Modificar Paciente ';
 
        if (empty($id)){ 
         show_404();
        }else{
          $data['paciente'] = $this->pacientes_model->get_pacientes_by_id($id);
          $this->load->view('pacientes/edit', $data);
        }
    }

    public function store(){
 
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
 
        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE){ 
            if(empty($id)){
              redirect( base_url('pacientes/create') ); 
            }else{
             redirect( base_url('pacientes/edit/'.$id) ); 
            }
        }else{ 
            $data['paciente'] = $this->pacientes_model->createOrUpdate();
            redirect( base_url('pacientes') ); 
        }  
    }

    public function delete(){
        $id = $this->uri->segment(3);
         
        if (empty($id)){
            show_404();
        }
                 
        $pacientes = $this->pacientes_model->delete($id);
         
        redirect( base_url('pacientes') );        
    }
}