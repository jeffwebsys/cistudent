<?php 
  
                     $id = $this->session->userdata('username');
                     $sql = $this->db->query("SELECT * FROM tbl_users where user_name = '$id'");
                     $sql2 = $sql->row(); 
                     $role = $sql2->user_level; 
                     if($role=='1'){
                     ?>
                      <li><a href="<?php echo site_url('page');?>">Dashboard</a></li>
                    <?php } ?>
                    <?php $role = $sql2->user_level; 
                     if($role=='3'){
                     ?>
                      <li><a href="<?php echo site_url('page/user');?>">Dashboard</a></li>
                    <?php } ?>
                    <?php $role = $sql2->user_level; 
                     if($role=='2'){
                     ?>
                      <li><a href="<?php echo site_url('page/mod');?>">Dashboard</a></li>
                    <?php } ?>