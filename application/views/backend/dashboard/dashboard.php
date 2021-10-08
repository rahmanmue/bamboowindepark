<div class="card p-4 mx-2" style="margin-top:80px;">
<h3 class="panel panel-back mt-5 font-weight-bold" style="padding: 10px;">DASHBOARD PAGE</h3>



    <div class="row mt-3">

        <!-- User -->
        <div class="col-md-6 col-sm-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-danger text-white set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <a href="<?=base_url('list-admin')?>" class= "<?= $status == 'admin' ? 'disabled' : '' ?> ">
                        <p>User</p>
                        <span class="badge badge-info"><?= $user?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-tags 2x"></i>
                </span>
                <div class="text-box" >
                <a href="<?=base_url('kategori-berita')?>" class= "<?= $status == 'admin' ? 'disabled' : '' ?> ">
                    <p>Kategori Berita</p>
                    <span class="badge badge-info"><?= $kategori?></span></a>
                </div>
            </div>
        </div>

       

    </div>

    <div class="row mt-3">

        <!-- Artikel -->
        <div class="col-md-6 col-sm-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-purple set-icon"><i class="fa fa-newspaper 2x"></i></span>
                <div class="text-box" >
                    <a href="<?=base_url('list-berita')?>" class= "<?= $status == 'admin' ? 'disabled' : '' ?> ">
                            <p>Berita</p>
                            <span class="badge badge-info"><?= $artikel?></span>
                    </a>
                </div>
            </div>
        </div>
        


 
        <div class="col-md-6 col-sm-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-info set-icon">
                    <i class="fas fa-seedling 2x text-white"></i>
                </span>
                <div class="text-box" >
                <a href="<?=base_url('list-katalog')?>" class= "<?= $status == 'admin' ? 'disabled' : '' ?> ">
                    <p>Katalog Spesies</p>
                    <span class="badge badge-info"><?= $katalog?></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 mt-3">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-warning set-icon">
                    <i class="fas fa-flag 2x text-white"></i>
                </span>
                <div class="text-box" >
                <a href="<?=base_url('list-banner')?>" class= "<?= $status == 'admin' ? 'disabled' : '' ?> ">
                    <p>Banner</p>
                    <span class="badge badge-info"><?= $banner?></span></a>
                </div>
            </div>
        </div>

    </div>


    
    

</div>









