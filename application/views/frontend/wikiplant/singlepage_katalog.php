<!-- Detail Berita -->
    <section id="detail_spesies" class="m-responsive">
      <div class="container">
        <div class="row justify-content-center">
  
          <!-- Content -->
          <div class="col-md-10 p-4 rounded " style="background-color: white;">
            <div class="text-center">
            <h1 ><?=$title?></h1>
            <hr>
            <p>
                <i class="far fa-calendar-alt mr-2"></i> <?=$katalog->tanggal_post?> 
                <i class="fas fa-pen ml-4 mr-2"></i> <?=$katalog->nama?>
            
            </p>
            <hr>
            <img src="<?=base_url('assets/uploads/katalog/'.$katalog->gambar)?>" class="img-fluid " width="560px" alt="">
            <hr>

              <hr>
            </div>

            <!-- Accordion Arrow -->
            <div id="main">
              
              <!-- Accordion 1 -->
                <div class="accordion" id="faq">
                  <div class="card">
                    <div class="card-header" id="faqhead1">
                        <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                        aria-expanded="true" aria-controls="faq1">
                        <i class="fas fa-seedling mr-3"></i> Klasifikasi</a>
                    </div>
            
                    <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                            <?=$katalog->klasifikasi?>
                        </div>
                    </div>
                  </div>
                   <!-- /Accordion 1 -->


                  <!-- Accordion 2 -->

                  <div class="accordion" id="faq">
                    <div class="card">
                      <div class="card-header" id="faqhead2">
                          <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                          aria-expanded="true" aria-controls="faq2">
                          <i class="fab fa-pagelines mr-3"></i>Deskripsi</a>
                      </div>
              
                      <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                          <div class="card-body">
                            <?=$katalog->deskripsi?>
                          </div>
                      </div>
                    </div>

                  <!-- /Accordion 2 -->


                  <!-- Accordion3 -->
                    
                  <div class="accordion" id="faq">
                    <div class="card">
                      <div class="card-header" id="faqhead3">
                          <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                          aria-expanded="true" aria-controls="faq3">
                          <i class="fas fa-water mr-3 "></i>Manfaat</a>
                      </div>
              
                      <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                          <div class="card-body">
                            <?=$katalog->manfaat?>
                          </div>
                      </div>
                    </div>
                    
                  <!-- /Accordion 3 -->



                
              </div>
  
            <!-- link -->
            <div class="text-right">
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
            </div>
          </div>
          <!-- /Content -->
  
        </div>
      </div>
    </section>
     <!-- /Detail Berita -->