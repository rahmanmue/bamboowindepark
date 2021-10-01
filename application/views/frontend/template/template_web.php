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
            <a class="navbar-brand" href="#">
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
          <div class="col-md-4 mb-4 mb-md-0">
            <h5 class="mb-5">Tentang Kami</h5>
    
            <h6>Alamat</h6>
            <p><?= $site->alamat?></p> 

            <h6>Email</h6>
            <p><?= $site->email?></p> 

            <h6>No Telepon</h6>
            <p><?= $site->no_telp?></p> 

            <h6>Sosial Media</h6>
              <!-- link -->
              <div>
                <a href="<?= $site->fb?>" style="text-decoration: none;">
                    <button class="btn btn-light"><i class="fab fa-fw fa-facebook-f"></i></button>
                </a>
                <!-- <a href="" style="text-decoration: none;">
                    <button class="btn btn-light"><i class="fab fa-fw fa-twitter"></i></button>
                </a> -->
                <a href="<?= $site->ig?>" style="text-decoration: none;">
                    <button class="btn btn-light"><i class="fab fa-fw fa-instagram"></i></button>
                </a>
                <!-- <a href="" style="text-decoration: none;">
                    <button class="btn btn-light"><i class="fab fa-fw fa-linkedin-in"></i></button>
                </a> -->
              </div>
              <!-- end link -->
          
          </div>
          <!--Grid column-->

           <!--Grid column-->
           <div class="col-md-4 mb-4 mb-md-0">
            <h5 class="mb-5">Halaman</h5>

            <h6>
              <a href="<?=base_url()?>" class="nav-link text-white">Home</a>
            </h6>
            <h6>
              <a href="<?=base_url('katalog')?>" class="nav-link text-white">Katalog Spesies</a>
            </h6>
            <h6>
              <a href="<?=base_url('berita')?>" class="nav-link text-white">Berita</a>
            </h6>
            <h6>
              <a href="<?=base_url('profil')?>" class="nav-link text-white">Profil</a>
            </h6>
            <h6>
              <a href="<?=base_url('hubungi')?>" class="nav-link text-white">Hubungi Kami</a>
            </h6>
            
            
          </div>
          <!--Grid column-->


          <!--Grid column-->
          <div class="col-md-4 mb-4 mb-md-0 small-devices">
            <h5 class="text-uppercase">Lokasi</h5>
    
            <div class="card text-light text-center" style="max-width: 22rem;" >
              <div class="card-body text-light" >
                  <iframe
                      src="<?=$site->google_maps?>"
                      width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <!--Grid column-->


        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="<?=base_url()?>"><?=$site->namaweb?></a>
      </div>
      <!-- Copyright -->

    </footer>

    <!-- /Footer -->
    
    

    

    <script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>