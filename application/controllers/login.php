<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->model('user_model', 'userm');
        $checkUser = $this->userm->checkUser();

        if ($checkUser){
            $this->session->set_userdata($checkUser);
        }
        redirect('/');

    }

}
