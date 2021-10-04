<!-- Jumbotorn -->

<div class="jumbotron jumbotron-fluid" style="background-image: url(<?=base_url('assets/uploads/logo/berita.jpg')?>); background-size:cover; filter:brightness(85%);">
        <div class="container text-white">
          <h1 class="display-4">Berita</h1>
          <p class="lead">Semua Berita Yang Selalu Update Setiap Minggunya.</p>
        </div>
      </div>


    <!-- /Jumbotorn -->

    <!-- bamboo -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1">
                <div class="rounded-circle berita">
                    <img src="<?=base_url('assets/uploads/logo/newspaper.png')?>" alt="">   
                </div>
                </div>
        </div>
    </div>
    <!-- /bambooo -->

    <div class="container">
        <div class="row mt-5">

            <?php foreach($listBerita as $berita) : ?>
              <!-- col-md-4 -->
                <div class="col-md-4">
                    <div class="card card-shadow border-1 rounded mb-4 cs">
                    <img src="<?= base_url('assets/uploads/cover/'.$berita->gambar)?>" class="img-fluid" width="600px" height="400px">
                        <div class="card-body">
                            <h5 class="card-title poppins"><?=$berita->judul?></h5>
                            <div class="card-text"><?= character_limiter($berita->content, 50);?></div>
                            <a href="<?= base_url('berita/'.$berita->slug_judul)?>" class="btn btn-info r-20 robot" >Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
              <!-- /col-md-4 -->
            <?php endforeach;?>


            <div class="col-md-12">
            <?= $this->pagination->create_links();?>
          </div>
        </div>
    </div>