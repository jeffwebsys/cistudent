<?php
                    #history
                    
                    $this->db->select('admin_date');
                    $this->db->select('admin_edits');
                    $this->db->select('admin_who');
                    $this->db->select('admin_history');
                    $this->db->from('settings');
                    $this->db->limit('4');
                    $this->db->order_by('admin_date','DESC');
                    $query = $this->db->get();
                    $sql = $query->result();

 
                     foreach($sql as $hist) {?>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/adminui/production/images/img.jpg');?>" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $hist->admin_who; ?></span>
                          <span class="time"> <?php echo $hist->admin_date; ?> </span>
                        </span>
                        <span class="message">
                         <?php echo $hist->admin_edits; ?>
                        </span>
      
                      </a>
                    </li>
                    <?php } ?>