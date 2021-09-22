<!-- Sidebar -->
<nav id="sidebar">
         <ul class="list-unstyled">
            <?php if ($userAktif->status == 'admin'){ ?>
                <li>
                    <a href="<?=base_url('dashboard');?>" class="<?=menuAktif('dashboard')?>">
                        <i class="fas fa-tachometer-alt fa-fw"></i><span class="ml-3">DASHBOARD</span>
                    </a>
                </li>
                
                <li>
                    <a href="#artikel" data-toggle="collapse" class="dropdown-toggle <?= ($this->uri->segment(1) == 'artikel' || $this->uri->segment(1) == 'kategori' ) ? 'active' :''; ?>" aria-expanded="false">
                        <i class="fas fa-newspaper"></i><span class="ml-3">BERITA</span>
                    </a>
                    <ul class="collapse list-unstyled" id="artikel">
                        <li>
                            <a href="<?=base_url('kategori');?>" class="<?=menuAktif('kategori')?>">
                                <i class="fa fa-tags"></i><span class="ml-3">KATEGORI BERITA</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url('artikel');?>" class="<?=menuAktif('artikel')?>">
                                <i class="fas fa-list"></i><span class="ml-3">BERITA</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?=base_url('artikel');?>" class="<?=menuAktif('artikel')?>">
                        <i class="fas fa-list"></i><span class="ml-3">KATALOG SPESIES</span>
                    </a>
                </li>

                <li>
                    <a href="<?=base_url('administrasi');?>" class="<?=menuAktif('administrasi')?>">
                        <i class="fas fa-user-cog"></i><span class="ml-3">USER</span>
                    </a>
                </li>



                <li>
                    <a href="<?=base_url('konfigurasi');?>" class="<?=menuAktif('konfigurasi')?>">
                        <i class="fas fa-tools"></i><span class="ml-3">KONFIGURASI</span>
                    </a>
                </li>

            <?php }?>
            <?php if($userAktif->status == 'user'){ ?>
                <li>
                    <a href="<?=base_url('dashboard');?>" class="<?=menuAktif('dashboard')?>">
                        <i class="fas fa-tachometer-alt fa-fw"></i><span class="ml-3">DASHBOARD</span>
                    </a>
                </li>

                <li>
                    <a href="<?=base_url('artikel');?>" class="<?=menuAktif('artikel')?>">
                        <i class="fas fa-list"></i><span class="ml-3">BERITA</span>
                    </a>
                </li>

                <li>
                    <a href="<?=base_url('artikel');?>" class="<?=menuAktif('artikel')?>">
                        <i class="fas fa-list"></i><span class="ml-3">KATALOG SPESIES</span>
                    </a>
                </li>
                
            <?php } ?>
        </ul>
    </nav>
    <!-- /Sidebar -->