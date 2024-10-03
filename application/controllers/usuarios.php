<?php

require_once APPPATH . '../vendor/autoload.php'; 



defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['usuarios'] = $this->usuario_model->get_usuarios();
        $data['title'] = 'Lista de Usuarios';
        $data['content'] = $this->load->view('usuarios/index', $data, TRUE);
        $this->load->view('template', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $this->usuario_model->create_usuario($this->input->post());
            redirect('usuarios');
        }
        $data['title'] = 'Crear Usuario';
        $data['content'] = $this->load->view('usuarios/create', NULL, TRUE);
        $this->load->view('template', $data);
    }

    public function edit($id) {
        $usuario = $this->usuario_model->get_usuario($id);
        if (!$usuario) {
            show_404();
        }

        if ($this->input->post()) {
            $this->usuario_model->update_usuario($id, $this->input->post());
            redirect('usuarios');
        }

        $data['usuario'] = $usuario;
        $data['title'] = 'Editar Usuario';
        $data['content'] = $this->load->view('usuarios/edit', $data, TRUE);
        $this->load->view('template', $data);
    }

    public function delete($id) {
        $this->usuario_model->delete_usuario($id);
        redirect('usuarios');
    }

    
    public function generate_pdf() {
        try {
            $mpdf = new \Mpdf\Mpdf();
            $html = '<h1>¡Archivo de prueba!</h1>';
            $mpdf->WriteHTML($html);

            // salida
            $mpdf->Output('documento.pdf', 'D'); 
        } catch (\Mpdf\MpdfException $e) {
        
            echo $e->getMessage();
        }
    }
}



