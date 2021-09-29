 <!-- Jumbotorn -->

 <div class="jumbotron jumbotron-fluid" style="background-image: url(<?=base_url('assets/uploads/logo/katalog.jpg')?>); background-size:cover;">
        <div class="container text-white">
          <h1 class="display-4">Katalog Spesies</h1>
          <p class="lead">Ini Adalah Kumpulan Katalog Spesies.</p>
        </div>
      </div>


    <!-- /Jumbotorn -->

    <!-- bamboo -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1">
                <div class="rounded-circle bamboo">
                    <img src="<?=base_url('assets/uploads/logo/bamboo.png')?>" alt="">   
                </div>
                </div>
        </div>
    </div>
    <!-- /bambooo -->

    <div class="container">
        <div class="row">

        <?php foreach ($listKatalog as $katalog) :?>
            <!-- Card Katalog -->
            <div class="col-md-4">
              <div class="card m-3 text-center cs">
                <div class="card-body">
                  <!-- <i class="fas fa-fw fa-image fa-3x"></i> -->
                  <img src="<?=base_url("assets/uploads/katalog/".$katalog->gambar) ?>" class="img-fluid mb-3">
                  <h5 class="card-title poppins"><?=$katalog->judul?></h5>
                  <a href="<?= base_url('katalog/'.$katalog->slug_judul)?>" class="btn btn-gl roboto" >Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- /Card Katalog -->
          <?php endforeach;?>

         
        </div>
    </div>






