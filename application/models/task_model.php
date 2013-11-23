<?php

//if (!defined('BASEPATH'))
//   exit('No direct script access allowed');


class task_model extends CI_Model {

    public function taskList() {
        
        $q = "select 
	`title`,
	`description`,
	`creation_date`,
	`due_date`,
	 u1.`name` as `creator`,
	 u2.`name` as `asignee`,
	`status_name`,
	`color`,
	(CURRENT_TIMESTAMP()>`due_date`) as `owerdue`
	 from `tasks` 
	inner join `users` u1 on u1.`user_id` = `cerator` 
	inner join `users` u2 on u2.`user_id` = `assignee` 
	inner join `statusses` on `status` = `status_id`
	order by `creation_date`, `due_date`";
        
        return $this->db->query($q)->result();
    }
    public function newTask(){
        
    }

}
