 <!-- Detail Berita -->
 <section id="detail_berita" class="m-responsive">
    <div class="container">
      <div class="row">

        <!-- Content -->
        <div class="col-md-8 p-4 rounded mb-3 " style="background-color: white;">
          <div>
            <h1 ><?=$title?></h1>
            <hr>
            <p>
                <i class="far fa-calendar-alt mr-2"></i> <?=$berita->tanggal_post?> 
                <i class="fa fa-tags ml-4 mr-2"></i> <?=$berita->kategori?>
                <i class="fas fa-pen ml-4 mr-2"></i> <?=$berita->penulis?>
            
            </p>
            <hr>
            <img src="<?=base_url('assets/uploads/cover/'.$berita->gambar)?>" class="img-fluid " width="760px" height="300px" alt="">
            <hr>

            <?=$berita->content?>
          </div>
           
          <!-- link -->
          <!-- <div class="text-right">
                <h6>SHARE</h6>
                <a href="" style="text-decoration: none;">
                    <button class="btn btn-primary"><i class="fab fa-fw fa-facebook-f"></i></button>
                </a>
                <a href="" style="text-decoration: none;">
                    <button class="btn btn-success"><i class="fab fa-fw fa-whatsapp "></i></button>
                </a>
                <a href="" style="text-decoration: none;">
                    <button class="btn btn-info"><i class="fab fa-fw fa-twitter"></i></button>
                </a>
          </div> -->
        </div>
        <!-- /Content -->

        <div class="col-md-4">
          <div class="card  mx-auto" style="width: 18rem;">
            <div class="card-header bg-utama text-white">
              Kategori
            </div>
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
  </section>
   <!-- /Detail Berita -->