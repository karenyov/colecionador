<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
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
        $this->load->library('form_validation');

        $validation_rules = [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'max_length[15]|required',
            ]
        ];
        $this->form_validation->set_rules($validation_rules);
        if($this->form_validation->run()){
            
        }

        $this->load->view('login/create');
    }

}
