<div id="border">
<h3 class="panel panel-back mt-5 " style="padding: 10px;">DASHBOARD PAGE</h3>



    <div class="row mt-3">

        <!-- User -->
        <div class="col-md-6 col-sm-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-danger text-white set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <a href="<?=base_url('administrasi')?>">
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
                <a href="<?=base_url('kategori')?>">
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
                    <a href="<?=base_url('visitor')?>">
                            <p>Berita</p>
                            <span class="badge badge-info"><?= $artikel?></span>
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
                <a href="<?=base_url('kategori')?>">
                    <p>Katalog Spesies</p>
                    <span class="badge badge-info"><?= $kategori?></span></a>
                </div>
            </div>
        </div>

    </div>

</div>







