<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <a href="<?php echo site_url('page');?>" class="site_title"><i class="fa fa-mortar-board"></i> <?php $this->load->view('sitename');?></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php  
               $id = $this->session->userdata('username');
               $sql = $this->db->query("SELECT * FROM tbl_users where user_name = '$id'");
                $sql2 = $sql->row(); ?>
                <img src="<?php echo base_url('uploads')?>/<?php echo $sql2->user_avatar; ?>" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username');?></h2>
                
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 <li><a><i class="fa fa-windows"></i> Navigation Bar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php $this->load->view('dash'); ?>
                      <li><a href="<?php echo site_url('user/course');?>">View Courses</a></li>
                      <li><a href="<?php echo site_url('user/subject');?>">View Subjects</a></li>
                      <li><a href="<?php echo site_url('user/students');?>">Enrolled Students</a></li>
                      <li><a href="<?php echo site_url('user/students');?>">My Avatar</a></li>
                    </ul>
                  </li>
                 
                  <li><a><i class="fa fa-edit"></i> Admin Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('user/settings');?>">Dashboard</a></li>
                      <li><a href="<?php echo site_url('user/announce');?>">Announcements</a></li>
                    </ul>
                  </li>
                  
                  
                  
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('user/logout');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php  
               $id = $this->session->userdata('username');
               $sql = $this->db->query("SELECT * FROM tbl_users where user_name = '$id'");
                $sql2 = $sql->row(); ?>
                    <img src="<?php echo base_url('uploads')?>/<?php echo $sql2->user_avatar; ?>" alt=""><?php echo $this->session->userdata('username');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo site_url('user/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"<?php echo site_url('user/logout');?>></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/adminui/production/images/img.jpg');?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/adminui/production/images/img.jpg'); ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/adminui/production/images/img.jpg'); ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url('assets/adminui/production/images/img.jpg');?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin Dashboard</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>





            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Management System</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">





            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>

                  <div class="count"><?php
                  // $this->db->select('count(*)');
                  // $this->db->from('tbl_users');
                  // // $this->db->where('user_id','2');
                  // $query = $this->db->get();
                  // echo $query->num_rows();

                $query = $this->db->query('SELECT * FROM tbl_users');
                echo $query->num_rows();
                  
                   ?></div>
                  <h3>Added User</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count"><?php

                $query = $this->db->query('SELECT * FROM tbl_users where user_level = 1 ');
                echo $query->num_rows();


                  ?></div>
                  <h3>Administrators</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-css3"></i></div>
                  <div class="count"><?php

                $query = $this->db->query('SELECT * FROM tbl_users where user_level = 2 ');
                echo $query->num_rows();


                  ?></div>
                  <h3>Moderators</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><?php

                $query = $this->db->query('SELECT * FROM courses');
                echo $query->num_rows();

                  ?></div>
                  <h3>Courses</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Registered users - <?php $this->load->view('sitename'); ?> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>School Info</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Status</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Count</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                             <?php 
                             $query = $this->db->query('SELECT user_name FROM tbl_users WHERE user_id = 1');                         
                             $row = $query->row(); 

                            if(isset($row)){
                ?>
                              <p><i class="fa fa-square blue"></i>Developer</p>
                            </td>
                            <td><?php echo $row->user_name; }?></td>
                          </tr>
                          <tr>
                            <td>
                              <?php 
                             $query = $this->db->query('SELECT * FROM tbl_users WHERE user_level = 3');                         
                             $row = $query->num_rows(); ?>
                              <p><i class="fa fa-square green"></i>Students </p>
                            </td>
                            <td><?php echo $row; ?></td>
                          </tr>
                          <tr>
                            <td>
                              <?php 
                             $query = $this->db->query('SELECT * FROM tbl_users WHERE user_level = 2');                         
                             $row = $query->num_rows(); ?>
                              <p><i class="fa fa-square purple"></i>Teachers </p>
                            </td>
                            <td><?php echo $row; ?></td>
                          </tr>
                          <tr>
                            <td>
                              <?php 
                             $query = $this->db->query('SELECT * FROM subject');                         
                             $row = $query->num_rows(); ?>
                              <p><i class="fa fa-square aero"></i>Subjects</p>
                            </td>
                            <td><?php echo $row; ?></td>
                          </tr>
                          <tr>
                            <td>
                               <?php 
                             $query = $this->db->query('SELECT * FROM courses');                         
                             $row = $query->num_rows(); ?>
                              <p><i class="fa fa-square red"></i>Courses </p>
                            </td>
                            <td><?php echo $row; ?></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>

            










<!-- /page content -->


            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- footer -->
        