<?php

class user_model extends CI_Model{
    public function checkUser(){
        
        $p = $this->input->post();
        $p['password'] = sha1($p['password']);
        $p['banned']=0;
        $valid = $this->db->get_where('users',$p);
        $loged_in = FALSE;
        if ((bool) $valid->num_rows) {
            $user = $valid->result();
            $loged_in['uid']=$user[0]->user_id;
            $loged_in['uname']=$user[0]->name;
        }
        return $loged_in;
    }
    public function userList(){
        $list = $this->db->get('userdata');
        return $list->result();
    }
}
