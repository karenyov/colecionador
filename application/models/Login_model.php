<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function form_validation() {
        $this->load->helper('auth');
        $this->load->model('validation_callables');
        $this->load->library('form_validation');

        $validation_rules = [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required|alpha',
            ],
            [
                'field' => 'last_name',
                'label' => 'last_name',
                'rules' => 'required|alpha',
            ],
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'max_length[12]|is_unique[' . db_table('user_table') . '.username]',
                'errors' => [
                    'is_unique' => 'Username already in use.'
                ],
            ],
            [
                'field' => 'passwd',
                'label' => 'passwd',
                'rules' => [
                    'trim',
                    'required',
                    [
                        '_check_password_strength',
                        [$this->validation_callables, '_check_password_strength']
                    ]
                ],
                'errors' => [
                    'required' => 'The password field is required.'
                ]
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required|valid_email|is_unique[' . db_table('user_table') . '.email]',
                'errors' => [
                    'is_unique' => 'Email address already in use.'
                ]
            ]
        ];
        $this->form_validation->set_rules($validation_rules);
        return $this->form_validation->run();
    }

    public function insert_user($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['passwd'] = $this->authentication->hash_passwd($data['passwd']);
        return $this->db->insert('users', $data);
    }

}
