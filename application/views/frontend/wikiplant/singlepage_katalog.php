<!-- Detail Berita -->
    <section id="detail_spesies" class="m-responsive">
      <div class="container">
        <div class="row justify-content-center">
  
          <!-- Content -->
          <div class="col-md-12 rounded p-md-5 pt-3" style="background-color: white;">
            <div class="text-center">
              <h1 ><?=$title?></h1>
              <hr>
                  <i class="far fa-calendar-alt mr-2"></i> <?=date('d F Y', strtotime($katalog->tanggal_post))?> 
                  <i class="fas fa-user ml-4 mr-2"></i> <?=$katalog->nama?>
              <hr>
              <img src="<?=base_url('assets/uploads/katalog/'.$katalog->gambar)?>" class="img-fluid " width="660px" alt="">
              <hr>
            </div>
  
            <div class="katalog-content">
              <?=$katalog->isi_katalog?>
            </div>
    
         

  
            <!-- link -->
            <div class="text-right my-5">
                  <h6>SHARE</h6>
                  <a href="https://www.facebook.com/sharer.php?u=<?=base_url('katalog/'.$katalog->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-primary"><i class="fab fa-fw fa-facebook-f"></i></button>
                  </a>
                  <a href="https://api.whatsapp.com/send?phone=&text=<?=$katalog->judul?> - <?=base_url('katalog/'.$katalog->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-success"><i class="fab fa-fw fa-whatsapp "></i></button>
                  </a>
                  <a href="https://twitter.com/intent/tweet?text=<?=$katalog->judul?>&url=<?=base_url('katalog/'.$katalog->slug_judul)?>" target="_blank" style="text-decoration: none;">
                      <button class="btn btn-info"><i class="fab fa-fw fa-twitter"></i></button>
                  </a>
            </div>
          </div>
          <!-- /Content -->
  
        </div>
      </div>
    </section>
     <!-- /Detail Berita -->