<?php
		$this->db->select('*');
        $this->db->from('settings');
        $this->db->where('activity_id',1);
        $query = $this->db->get();
        $sitename = $query->result();
        foreach ($sitename as $name) {  
         echo $name->admin_sitename; }

         ?>