 <!-- Detail Berita -->
 <section id="detail_berita" class="m-responsive">
    <div class="container">
      <div class="row">

        <!-- Content -->
        <div class="col-md-8 p-4 rounded mb-3 " style="background-color: white;">
          <div>
            <h1 ><?=$title?></h1><hr>
            <p>    
                  <i class="fa fa-tags mr-1"></i> Kategori Berita :  <?=$berita->kategori?> 
            </p>
            <hr>
            <img src="<?=base_url('assets/uploads/cover/'.$berita->gambar)?>" class="img-fluid " width="760px" height="300px" alt="">
            <hr>
            <p>Diposting <?=date('d F Y', strtotime($berita->tanggal_post))?>, Oleh <?=$berita->penulis?></p>
            <hr>

          </div>

          <div class="berita-content">
            <?=$berita->content?>
          </div>

          <!-- link -->
          <div class="text-right mt-5">
              <h6>SHARE</h6>
              <a href="https://www.facebook.com/sharer.php?u=<?=base_url('berita/'.$berita->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-primary"><i class="fab fa-fw fa-facebook-f"></i></button>
                  </a>
                  <a href="https://api.whatsapp.com/send?phone=&text=<?=$berita->judul?> - <?=base_url('berita/'.$berita->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-success"><i class="fab fa-fw fa-whatsapp "></i></button>
                  </a>
                  <a href="https://twitter.com/intent/tweet?text=<?=$berita->judul?>&url=<?=base_url('berita/'.$berita->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-info"><i class="fab fa-fw fa-twitter"></i></button>
                  </a>
          </div>
          

          
    
        </div>
        <!-- /Col-md-8 -->

        <div class="col-md-4">
          <div class="card mx-auto" >
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