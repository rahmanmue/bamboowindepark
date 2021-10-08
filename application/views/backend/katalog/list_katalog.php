<div class="container my-5">
   <div class="card p-4" style="margin-top:100px;">

  <?php if($this->session->flashdata('alertKatalog') == 'alert alert-success') :?>
   <div class="<?=$this->session->flashdata('alertKatalog')?> alert-dismissible fade show" role="alert">
   <?=$this->session->flashdata('pesan')?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
  <?php endif;?>
   
   <div class="row">
      <div class="col-md-12">
         <a href="<?=base_url('list-katalog/tambah')?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> KATALOG</a>
      </div>
   </div>
   
   <div class="table-responsive mt-3">
   <table class="table table-bordered table-hover table-striped container border-0" id="table">
   <thead>
      <tr class="font-weight-bold">
         <td>No</td>
         <td>Gambar</td>
         <td>Judul Katalog</td>
         <td>Status</td>
         <td>Penulis</td>
         <td>QR Code & Link</td>
         <td class="text-center">Aksi</td>
      </tr>
   </thead>
   
   <tbody>
      <?php $i=1; foreach($listKatalog as $katalog) : ?>
      <tr>
         <td><?=$i?></td>
         <td class="text-center">
            <img src="<?=base_url('assets/uploads/katalog/'.$katalog->gambar)?> " alt="<?= ($katalog->gambar) ?? 'format tidak sesuai / ukuran besar' ?>" width="60px"  class="img img-responsive">
         </td>
         <td><?=$katalog->judul?></td>
         <td><?=$katalog->status?></td>
         <td><?=$katalog->penulis?></td>
         <td>
            <?php
               $link=base_url('katalog/'.$katalog->slug_judul);
               QRcode::png("$link", FCPATH.'assets/uploads/qrcode/'.$katalog->slug_judul.'.png',"M",10,10);
            ?>

            <img 
               src="<?=base_url('assets/uploads/qrcode/'.$katalog->slug_judul.'.png')?>" 
               width="100"
               alt="">
            <a href="<?=base_url('assets/uploads/qrcode/'.$katalog->slug_judul.'.png')?>">Lihat</a>
         </td>
         <td>
         <div class="text-center d-flex" >
            <form action="<?=base_url('list-katalog/edit')?>" method="post">
               <input type="hidden" name="id" value="<?=$katalog->id_katalog?>">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
            </form>
            <div class="btn btn-warning btn-sm mx-2">
               <a href="<?=$link?>" target="_blank">
               <i class="fas fa-eye text-white"></i>
               </a>
            </div>
            <form action="<?=base_url('list-katalog/hapus')?>" method="post">
               <input type="hidden" name="id" value="<?=$katalog->id_katalog?>">
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Menghapus ini ?')"><i class="fa fa-trash"></i></button>
            </form>
            
            </div>
         </td>
      </tr>
      <?php $i++; endforeach;?>
   </tbody> 
   </table>
   
</div>
</div>
</div>