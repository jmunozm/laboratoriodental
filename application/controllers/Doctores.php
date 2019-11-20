<?php
class Doctores extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('doctores_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
    }

    public function index(){
        $data['doctores'] = $this->doctores_model->doctores_list();
        $data['title'] = 'Lista de doctores ';
        $data['contenido'] = 'contenedorprincipal';
      // $this->load->view('doctores/list', $data);
      $this->load->view('principal', $data);
    }
    public function showtables(){
        $data['doctores'] = $this->doctores_model->doctores_list();
        $data['title'] = 'Lista de doctores ';
        $data['contenido'] = 'tablas';
      // $this->load->view('doctores/list', $data);
      $this->load->view('principal', $data);
    }

    public function list(){
        $data['doctores'] = $this->doctores_model->doctores_list();
        $data['title'] = 'Lista de doctores ';
        $data['contenido'] = 'doctores/list';
        //$this->load->view('doctores/list', $data);
        $this->load->view('principal', $data);
    }

    public function create(){
        $data['title'] = 'Alta de Doctor';
        $this->load->view('doctores/create', $data);
    }

    public function edit($id){
        $id = $this->uri->segment(3);
        $data = array();
        $data['title'] = 'Modificar Doctor ';
 
        if (empty($id)){ 
         show_404();
        }else{
          $data['doctor'] = $this->doctores_model->get_doctores_by_id($id);
          $this->load->view('doctores/edit', $data);
        }
    }

    public function store()
    {
 
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
 
        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE){ 
            if(empty($id)){
              redirect( base_url('doctores/create') ); 
            }else{
             redirect( base_url('doctores/edit/'.$id) ); 
            }
        }else{ 
            $data['doctor'] = $this->doctores_model->createOrUpdate();
            redirect( base_url('doctores/list') ); 
        }  
    }

    public function delete(){
        $id = $this->uri->segment(3);
         
        if (empty($id)){
            show_404();
        }
                 
        $doctores = $this->doctores_model->delete($id);
         
        redirect( base_url('doctores/list') );        
    }
}