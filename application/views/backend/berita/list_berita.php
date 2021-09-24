<div class="container mt-5">
   <div id="border" class="card">

  <?php if($this->session->flashdata('pesan')) :?>
   <div class="<?=$this->session->flashdata('alert')?> alert-dismissible fade show" role="alert">
   <?=$this->session->flashdata('pesan')?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
  <?php endif;?>
   
   <div class="row">
      <div class="col-md-12">
         <a href="<?=base_url('list-berita/tambah')?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> ARTIKEL</a>
      </div>
   </div>
   
   <div class="table-responsive mt-3">
   <table class="table table-bordered table-hover table-striped container border-0" id="table">
   <thead>
      <tr class="font-weight-bold">
         <td>No</td>
         <td>Gambar</td>
         <td>Judul</td>
         <td>Status</td>
         <td>Kategori</td>
         <td>Penulis</td>
         <td class="text-center">Aksi</td>
      </tr>
   </thead>
   
   <tbody>
      <?php $i=1; foreach($listBerita as $berita) :?>
      <tr>
         <td><?=$i?></td>
         <td class="text-center">
            <img src="<?=base_url('assets/uploads/cover/'.$berita->gambar)?> " alt="<?= ($berita->gambar) ?? 'format tidak sesuai / ukuran besar' ?>" width="60px"  class="img img-responsive">
         </td>
         <td><?=$berita->judul?></td>
         <td><?=$berita->status?></td>
         <td><?=$berita->kategori?></td>
         <td><?=$berita->penulis?></td>
         <td>
         <div class="text-center" >
            <form action="<?=base_url('list-berita/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$berita->id_berita?>">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
            </form>
            <form action="<?=base_url('list-berita/hapus')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$berita->id_berita?>">
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