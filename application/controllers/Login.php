<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
    }

    public function index() {
        $this->load->library('form_validation');

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->require_min_level(1);
        }

        $this->setup_login_form();

        $this->load->view('login/login');
    }

    public function logout() {
        $this->authentication->logout();
        redirect('login');
    }

    public function create_user() {
        if ($this->login_model->form_validation()) {
            $data = ['username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'auth_level' => 1,
                'passwd' => $this->input->post('passwd')];

            if($this->login_model->insert_user($data)){
                //cadastro realizado com sucesso
            } 
        }
        $this->load->view('login/create');
    }

}
