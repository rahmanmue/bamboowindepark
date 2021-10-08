<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?=base_url('assets/uploads/logo/'.$site->icon) ?>" rel="shortcut icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
    
    <title><?= $title ?></title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url()?>">
              <div class="rounded-circle bg-white p-2 mr-2 d-inline-block align-center">
                <img src="<?=base_url('assets/uploads/logo/'. $site->icon )?>" width="40" height="40" alt=""/>
              </div>
              <?= $site->namaweb?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= $this->uri->segment('1') == '' ? 'active': ''?>">
                      <a class="nav-link" href="<?=base_url()?>"
                        >HOME <span class="sr-only">(current)</span></a
                      >
                    </li>
                    <li class="nav-item <?= $this->uri->segment('1') == 'katalog' ? 'active': ''?>">
                      <a class="nav-link" href="<?=base_url('katalog')?>">KATALOG SPESIES</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment('1') == 'berita' ? 'active': ''?>">
                      <a class="nav-link" href="<?=base_url('berita')?>">BERITA</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment('1') == 'profil' ? 'active': ''?>">
                      <a class="nav-link" href="<?=base_url('profil')?>">PROFIL</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment('1') == 'hubungi' ? 'active': ''?>">
                      <a class="nav-link" href="<?=base_url('hubungi')?>">HUBUNGI KAMI</a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <?php 
        if($isi){
            $this->load->view($isi);
        }else{
            echo"<h1>Web Masih Kosong...</h1>";
        }
    ?>




    <!-- Footer -->
    <footer class="text-lg-start mt-5">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 mb-4 mb-md-0 small-devices col-xs-12">
            <h5 class="text-uppercase">Lokasi</h5>
    
            <div class="card text-light text-center my-4" style="max-width: 22rem;" >
              <div class="card-body text-light" >
                  <iframe
                      src="<?=$site->google_maps?>"
                      width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-md-6 mb-4 mb-md-0">
            <h5>Contact Us</h5>

            <div class="mt-4">
              <p><i class="fas fa-map-marker-alt"></i> Alamat</p>
              <p><?=$site->alamat?></p> 
            </div>
            
            <div class="mt-5">
              <h6> Nomor Telepon / Whatsapp</h6>
              <a href="https://wa.me/<?=$site->no_telp?>?text=Hai admin ... "><i class="fas fa-fw fa-phone"></i> <?=$site->no_telp?></a> 
            </div>

            <div class="my-5">
              <h6>Email</h6>
              <a href="mailto:<?=$site->email?>?subject=Ini adalah Judul Email&body=Hai admin ..."><i class="fas fa-fw fa-envelope"></i><?=$site->email?></a>
            </div>
            <!-- link -->
            <div>
              <h6>Sosial Media</h6>
              <a href="<?=$site->fb?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-facebook-f"></i></button>
              </a>
              <a href="<?=$site->ig?>" style="text-decoration: none;">
                <button class="btn btn-light"><i class="fab fa-fw fa-instagram"></i></button>
              </a>
              <a href="<?=$site->twitter?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-twitter"></i></button>
              </a>
              <a href="<?=$site->yt?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-youtube"></i></button>
              </a>
          </div>
          <!-- end link -->
          
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="<?=base_url()?>"><?=$site->namaweb?> </a> | Made By  
        <!-- Button trigger modal -->
          <button type="button" class="border-0 bg-transparent text-warning" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-heart" style="color:red;"></i> Team Ummi 
          </button>

         
      </div>
      <!-- Copyright -->

       <!-- Modal -->
       

    </footer>

    <!-- /Footer -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog text-dark" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Team UMMI</h5>
          </div>
          <div class="modal-body">
            <table class="">
              <tr>
                <td>Pembuat</td>
                <td class="px-2">:</td>
                <td>Hahaha</td>
              </tr>
              <tr>
                <td>Pembuat nya asdad</td>
                <td class="px-2">:</td>
                <td>Hahaha</td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    
    

    

    <script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>