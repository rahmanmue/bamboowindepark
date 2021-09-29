<section id="slider">

    
    <!-- <div class="container"> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

              <?php $i=0; foreach($banner as $b): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?> " class="<?= $i == 0 ?'active': ''?>"></li>
              <?php  $i++; endforeach;?>

            </ol>

            <div class="carousel-inner">

              <?php $i=0; foreach($banner as $b) : ?>
                <div class="carousel-item <?= $i == 0 ?'active': ''?>">
                  <img class="d-block w-100 rounded" src="<?=base_url('assets/uploads/banner/'.$b->gambar)?>" alt="slide - <?=$i?>">
                </div>
              <?php  $i++; endforeach;?>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <!-- </div> -->

    <!-- Akhir Carousel -->
  </section>


    <section id="berita">
        <div class="container">

          <!-- Berita Terbaru dan Icon -->
            <div class="row">
                <div class="col-12">
                  <div class="text-center">
                    <i class="fas fa-newspaper fa-2x" style="color: #0275d8;"></i>
                    <h3 class="mt-2 poppins">Berita Terbaru</h3>
                    <p>Update Berita Terbaru Seputar Informasi Yang Terkini</p>
                    <hr>
                  </div>
                </div>
            </div>
            <!--/ Berita Terbaru dan Icon -->

            <!-- Card Berita -->
            <div class="row mt-3">

            <?php foreach($listBerita as $berita) : ?>
              <!-- col-md-4 -->
              <div class="col-md-4">
                <div class="card card-shadow border-1 rounded mb-4 cs">
                  <img src="<?= base_url('assets/uploads/cover/'.$berita->gambar)?>" class="img-fluid" width="600px" height="400px">
                  <div class="card-body">
                    <h5 class="card-title poppins"><?=$berita->judul?></h5>
                    <div class="card-text"><?= word_limiter($berita->content, 20);?></div>
                    <a href="<?= base_url('frontend/wikiplant/berita/'.$berita->slug_judul)?>" class="btn btn-info r-20 robot" >Baca Selengkapnya</a>
                  </div>
               </div>
              </div>
              <!-- /col-md-4 -->
            <?php endforeach;?>
              
            </div>
            <!-- /card Berita -->

            <!-- Lihat Selengkapnya -->
            <div class="row mt-4 mb-5">
              <div class="col-md-12">
                <div class="text-center">
                  <a href="#" class="btn btn-outline-primary roboto">Lihat Lainnya</a>
                </div>
              </div>
            </div>
            <!-- /Lihat Selengkapnya -->

        </div>

    </section>



    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_ylgwso92.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop autoplay></lottie-player>
          </div>

          <div class="col-md-6 d-flex align-items-center">
            <div class="px-3">
              <h2 class="poppins"><?=$site->namaweb?></h2>
              <p><?=$site->deskripsi_web?></p>
            </div>
          </div>
        </div>
      </div>

    </section>





    <!-- katalog Spesies -->
    
    <section id="katalog-spesies">
      <div class="container">
        <div class="row">

          <!-- Katalog Spesies -->
          <div class="col-md-12">
            <div class="text-center">
              <i class="fab fa-pagelines fa-2x" style="color: #57CC99;"></i>
              <h3 class="mt-3 poppins">Katalog Spesies</h3>
              <p>Beberapa Jenis Katalog Spesies Untuk Tanaman.</p>
            </div>
          </div>
          <!-- / Katalog Spesies -->

          <?php foreach ($listKatalog as $katalog) :?>
            <!-- Card Katalog -->
            <div class="col-md-4">
              <div class="card m-3 text-center cs">
                <div class="card-body">
                  <!-- <i class="fas fa-fw fa-image fa-3x"></i> -->
                  <img src="<?=base_url("assets/uploads/katalog/".$katalog->gambar) ?>" class="img-fluid mb-3">
                  <h5 class="card-title poppins"><?=$katalog->judul?></h5>
                  <a href="<?= base_url('frontend/wikiplant/katalog/'.$katalog->slug_judul)?>" class="btn btn-gl roboto" >Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- /Card Katalog -->
          <?php endforeach;?>

        

           <!-- Lihat Selengkapnya -->
           
            <div class="col-md-12 mt-5 mb-4">
              <div class="text-center">
                <a href="#" class="btn btn-outline-success roboto">Lihat Lainnya</a>
              </div>
            </div>
          
          <!-- /Lihat Selengkapnya -->

          

        </div>



      </div>
    </section>
    <!-- /Katalog Spesies -->
    
