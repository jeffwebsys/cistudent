<!-- Modal Courses-->

<?php 

//$this->load->helper('sql'); 
$this->load->model('login_model');
?>

       <div class="modal fade course" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Student Information</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Add Data</h4>
                           <form method="post" action="<?php echo site_url('user/addcourse')?>" onsubmit="$.bootstrapGrowl('Added Successfully!');">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Description</label>
                        <input type="text" class="form-control" name="course_desc" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Code</label>
                        <input type="text" class="form-control" name="course_code" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                   
                    
                 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button  type="submit" class="btn btn-primary" >Save changes</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>

       

        <!-- Students Modal -->
                  

                  <div class="modal fade students" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Student Information</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Add Data</h4>
                           <form method="post" action="<?php echo site_url('user/adduser')?>" onsubmit="$.bootstrapGrowl('Added Successfully!');">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" name="user_password" aria-describedby="emailHelp" placeholder="" required="">
                    </div>



                    <!--select gender -->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                         <select class="form-control" name="user_gender">     
              <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
                    </div>


                    <!--select gender -->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                         <select class="form-control" name="user_level">     
              <option value="1">Administrator</option>
            <option value="2">Teacher</option>
            <option value="3">Student</option>
            </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Email</label>
                        <input type="text" class="form-control" name="user_email" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                     
                   <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                        <select class="form-control" name="course_id">
                        <?php 
              $query = $this->db->query('SELECT course_desc,course_id FROM courses');
           
          
            foreach ($query->result() as $rows)
            { 
              echo '<option value="'.$rows->course_id.'">'.$rows->course_desc.'</option>';
            }
            ?>
            </select>
                    </div>
                    
                    
                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- Subject Modal -->
                   <div class="modal fade subject" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Subjects</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Add Data</h4>
    <form method="post" action="<?php echo site_url('user/addsubject')?>" onsubmit="$.notify('ADDED!', 'success');">
                          
                   
                   <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                    <select class="form-control" name="course_id">
                        <?php 
              $query = $this->db->query('SELECT course_desc,course_id FROM courses');
           
          
            foreach ($query->result() as $rows)
            { 
              echo '<option value="'.$rows->course_id.'">'.$rows->course_desc.'</option>';
            }
            ?>
            </select>
                    </div>
                   

                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject Name</label>
                        <input type="text" class="form-control" name="subject_name" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject Code</label>
                        <input type="text" class="form-control" name="subject_code" aria-describedby="emailHelp" placeholder="" required="">
                    </div>
                    
                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" id="test" class="btn btn-primary">Save changes</button>
           
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                    <!-- View QR code -->
                 
                   <div class="modal fade editqr" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">QR Subject</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Edit Data</h4>
                           <form method="post" action="<?php echo site_url('user/subjectupdate')?>" onsubmit="return validateForm()">
                            <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="user_id" id="user_id" aria-describedby="emailHelp" required="">
                    </div>
                  
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp" id="user_name" required="">
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                         <select class="form-control" name="user_level">     
              <option value="1">Administrator</option>
            <option value="2">Teacher</option>
            <option value="3">Student</option>
            </select>
                    </div>
                   
                   
                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="update">Save changes</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- Edit Subject Modal -->
                   <div class="modal fade submodal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Subject</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Edit Data</h4>
                           <form method="post" action="<?php echo site_url('user/subjectupdate')?>" onsubmit="return validateForm()">
                            <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="subject_id" id="subject_id" aria-describedby="emailHelp" required="">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject Name</label>
                        <input type="text" class="form-control" name="subject_name" id="subject_name"aria-describedby="emailHelp" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject Code</label>
                        <input type="text" class="form-control" name="subject_code" aria-describedby="emailHelp" id="subject_code" required="">
                    </div>
                   
                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="update">Save changes</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- View QR code -->

                  <!-- Edit Course -->
                   <div class="modal fade editcourse" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Course</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Edit Data</h4>
                           <form method="post" action="<?php echo site_url('user/courseupdate')?>" onsubmit="return validateForm()">
                            <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="course_id" id="course_id" aria-describedby="emailHelp" required="">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" class="form-control" name="course_desc" id="course_desc"aria-describedby="emailHelp" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Code</label>
                        <input type="text" class="form-control" name="course_code" aria-describedby="emailHelp" id="course_code" required="">
                    </div>
                    <div class="form-group">
                  
 </div>
                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="update">Save changes</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  








                

                
