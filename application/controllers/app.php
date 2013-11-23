<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class App extends CI_Controller {

    public function index() {
  
        if ($this->session->userdata('uid')&&$this->session->userdata('uname')){
            $this->load->model('task_model', 'taskmod');
            $view['tasks'] = $this->taskmod->taskList();

           $this->load->view('main_view', $view);        
           return;
        }
        $this->load->view('login_view');
                
    }
    
    
    public function logoff(){
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('uname');
        redirect('/');
    }
    
    
    public function newTask(){
        $p = $this->input->post();
        $this->load->model('task_model', 'taskmod');
        $this->taskmod->newTask();
        
        //date un time no formas nāk atsevišķi, tos jāapvieno un no masīva jāizdzēš
        var_dump($p);
        
        //$this->db->inser('tasks', $p);
        //redirect('/');
    }

}
