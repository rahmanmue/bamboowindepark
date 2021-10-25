 <!-- Jumbotorn -->

    <div class="jumbotron jumbotron-fluid" style="background-color:#213341">
        <div class="container text-white">
          <h1 class="display-4">Hubungi Kami</h1>
          <p class="lead">Lebih dekat dengan Kami...</p>
        </div>
      </div>


    <!-- /Jumbotorn -->


    <div class="container p-4">
        <!--Grid row-->
        <div class="row mb-5">
          <!--Grid column-->
          <div class="col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Lokasi</h5>
    
            <div class="card text-light text-center" style="max-width: 22rem;" >
              <div class="card-body text-light img-fluid d-flex justify-content-center" >
                  <iframe
                      src="<?=$site->google_maps?>"
                      width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          
          <div class="col-md-6 mb-4 mb-md-0  ">
              <div class="mt-5">
                  <h6 ><i class="fas fa-map-marker-alt"></i> Alamat</h6>
                  <p><?=$site->alamat?></p> 
              </div>

              <div class="mt-4">
                  <h6><i class="fas fa-fw fa-phone"></i> Nomor Telepon</h6>
                  <a href="tel:<?=$site->no_telp?>"><?=$site->no_telp?></a> 
              </div>

              <div class="mt-4">
                  <h6><i class="fab fa-fw fa-whatsapp"></i> WhatsApp</h6>
                  <a href="https://wa.me/<?=$site->wa?>?text=Hai admin ... "> <?=$site->wa?></a>  
              </div>

              <div class="mt-4">
                <h6><i class="fas fa-fw fa-envelope"></i> Email</h6>
                <a href="mailto:<?=$site->email?>?subject=Ini adalah Judul Email&body=Hai admin ..."><?=$site->email?></a>
              </div>


             

            <h6 class="mb-3 mt-4">Sosial Media</h6>
            <!-- link -->
            <div>
              <a href="<?=$site->fb?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-facebook-f"></i></button>
              </a>
              <a href="<?=$site->twitter?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-twitter"></i></button>
              </a>
              <a href="<?=$site->ig?>" style="text-decoration: none;">
                  <button class="btn btn-light"><i class="fab fa-fw fa-instagram"></i></button>
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

