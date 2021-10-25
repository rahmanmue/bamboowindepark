<!-- Jumbotorn -->

<div class="jumbotron jumbotron-fluid" style="background-image: url(<?=base_url('assets/uploads/logo/berita.jpg')?>); background-size:cover; filter:brightness(85%);">
        <div class="container text-white">
          <div class="row">
            <div class="col-md-6 mb-4">
              <h1 class="display-4">Berita</h1>
              <p class="lead">Semua Berita Yang Selalu Update Setiap Minggunya.</p>
              <?php if($this->uri->segment('1') == 'berita') {?>
                  <form action="" method="post" class="d-flex">
                        <input name="keyword" class="form-control mr-2" type="search" placeholder="Cari Judul Berita..." aria-label="Search"/>
                        <button class="btn btn-primary" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                  </form>
                  <?php } else{?>
                    <a href="<?=base_url('berita')?>" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </a>
                  <?php } ?>
            </div>
          </div>
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
        <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Kategori Berita
            </a>
            <div class="collapse mt-2" id="collapseExample"> 
              <div class="card card-body col-md-5">
                <ul class="list-group list-group-flush">
                  <?php foreach($listKategori as $kategori):?>
                    <li class="list-group-item">
                      <a href="<?=base_url('page-kategori-berita/'.$kategori->slug_kategori)?>" style="text-decoration:none;">
                        <?=$kategori->kategori?>
                      </a>
                    </li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>    
          </div>
        </div>



        <div class="row mt-4">
          
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
              <?= $listBerita != null ? $this->pagination->create_links() : 'Hasil Pencarian Tidak Ada ... ';?>
            </div>
        </div>
    </div>