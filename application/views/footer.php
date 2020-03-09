 <!-- footer content -->

        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/adminui/vendors/jquery/dist/jquery.min.js');?> "></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/adminui/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/adminui/vendors/fastclick/lib/fastclick.js');?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/adminui/vendors/nprogress/nprogress.js');?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>

    <script src="<?php echo base_url('assets/adminui/vendors/jszip/dist/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

    <!-- PNotify -->
    <script src="<?php echo base_url('assets/adminui/vendors/pnotify/dist/pnotify.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/pnotify/dist/pnotify.buttons.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/vendors/pnotify/dist/pnotify.nonblock.js');?>"></script>

    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/adminui/build/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/adminui/src/js/notify.js');?>"></script>
     <script src="<?php echo base_url('assets/adminui/src/js/growl.js');?>"></script>
     

<!-- Edit Subject- -->
                    <script type="text/javascript">
                    $(document).ready( function(){
                      $('.editbtn').on('click', function(){
                        $('.submodal').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function() {
                          return $(this).text();
                        }).get();

                        console.log(data);
                        $('#subject_id').val(data[0]);
                        $('#subject_name').val(data[2]);
                        $('#subject_code').val(data[3]);

                      });
                    });
                    </script>
                    <!-- Edit Course- -->
                    <script type="text/javascript">
                    $(document).ready( function(){
                      $('.coursebtn').on('click', function(){
                        $('.editcourse').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function() {
                          return $(this).text();
                        }).get();

                        console.log(data);
                        $('#course_id').val(data[0]);
                        $('#course_desc').val(data[1]);
                        $('#course_code').val(data[2]);

                      });
                    });
                    </script>
                     <!-- Edit Course- -->
                    <script type="text/javascript">
                    $(document).ready( function(){
                      $('.qrbtn').on('click', function(){
                        $('.editqr').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function() {
                          return $(this).text();
                        }).get();

                        console.log(data);
                        $('#user_id').val(data[0]);
                        $('#user_name').val(data[2]);
                        $('#user_level').val(data[4]);
                        $('#qr_code').val(data[8]);
                      });
                    });
                    </script>
                    
  </body>
</html>