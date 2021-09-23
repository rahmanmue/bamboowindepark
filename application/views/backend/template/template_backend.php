<?php
    $userAktif= $this->M_Auth->detail($this->session->userdata('user_id'));
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
    <!-- <link href="" rel="shortcut icon"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/fontawesome/css/all.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css'); ?>" />

    <!-- JS -->
   <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>" ></script>
   <script src="<?=base_url('assets/ckfinder/ckfinder.js');?>" ></script>
  
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-atas">
      <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn-info">
         <i class="fas fa-align-left"></i>
      </button>
      <a href="#" class="navbar-brand menu-item">WikiPlant</a>
         <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
               <li class="nav-item ">
                  <a class="nav-link btn btn-info text-white menu-icon" href="<?=base_url('backend/profil')?>">  <i class="fas fa-user-tie"></i><span class="ml-2"><?=$userAktif->nama??''?></span></a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link btn btn-success text-white menu-icon" href="<?=base_url()?>" target="blank"><i class="fas fa-home"></i><span class="ml-2">HomePage</span></a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link btn btn-danger text-white menu-icon" href="<?=base_url('auth/logout');?>"><i class="fas fa-sign-out-alt"></i><span class="ml-2">Logout</span></a>
               </li> 
            </ul>
         </div>
      </div>
   </nav>


   <!-- Sidebar -->
    <nav id="sidebar">
         <ul class="list-unstyled">
            <li>
               <a href="<?=base_url('backend/admin');?>" class="<?=menuAktif('admin')?>">
                  <i class="fas fa-user-cog"></i><span class="ml-3">USER</span>
               </a>
            </li>
        </ul>
    </nav>
    <!-- /Sidebar -->

         
      <!-- CONTENT -->
      <div id="content">   
         <?php 
            if($isi){
               $this->load->view($isi);
            }else{
               echo "
                  <h1>Data Masih Kosong </h1>
               ";
            }
         ?>   
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js');?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/DataTables/datatables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script>
       //  CKEDITOR
       var editor = CKEDITOR.replace('editor',{
          height : 500
       });
       CKFinder.setupCKEditor(editor);

       var editor2 = CKEDITOR.replace('editor2', {
          height: 800
       });
       CKFinder.setupCKEditor(editor2);


      //FILE BROWSER 
       $('document').ready(function(){
         $('#table').DataTable();

         $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            // SIDEBAR
          $('#sidebarCollapse').click(function(){
             $('#sidebar').toggleClass('active');
             $('#content').toggleClass('active');
          });
       });
    </script>
  </body>
</html>