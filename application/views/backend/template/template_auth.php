<?php
 $site = $this->M_Konfigurasi->get();
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <title><?=$title;?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="<?=base_url('assets/uploads/logo/'.$site->icon) ?>" rel="shortcut icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
      <style>
         .r-30{
            border-radius: 30px;
         }
      </style>
   </head>

   <body class="bg-dark">

      <?php if($isi){
               $this->load->view($isi);
            }else{
               echo"<h1>Data Kosong</h1>";
            }
      ?>

   <script src="<?=base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
   <script src="<?=base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
   <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
   </body>
</html>