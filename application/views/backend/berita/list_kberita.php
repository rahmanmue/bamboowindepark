<div class="container my-5">
   <div class="card p-4" style="margin-top:100px;">

  <?php if($this->session->flashdata('alertKategori') == 'alert alert-success') :?>
   <div class="<?=$this->session->flashdata('alertKategori')?> alert-dismissible fade show" role="alert">
   <?=$this->session->flashdata('pesan')?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
  <?php endif;?>

   <div class="row ">
      <div class="col-md-12 ">
         <a href="<?=base_url('kategori-berita/tambah')?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> KATEGORI</a>
      </div>
   </div>
   
   <div class="table-responsive  mt-3">
   <table class="table table-bordered table-hover table-striped container border-0" id="table">
   <thead>
      <tr class="font-weight-bold">
         <td>No</td>
         <td>Nama Kategori</td>
         <td>Urutan Kategori</td>
         <td  class="text-center">Aksi</td>
      </tr>
   </thead>
   
   <tbody>
      <?php $i=1; foreach($listKategori as $kategori) :?>
      <tr>
         <td><?=$i?></td>
         <td><?= $kategori->kategori?></td>
         <td><?= $kategori->urutan?></td>
         <td>
          <div class="text-center tengah" >
            <form action="<?=base_url('kategori-berita/edit')?>" method="post" >
               <input type="hidden" name="id" value="<?=$kategori->id_kategori?>">
               <button type="submit" class="btn btn-primary mr-1 btn-sm"><i class="fa fa-edit"></i></button>
            </form>
            <form action="<?=base_url('kategori-berita/hapus')?>" method="post" >
               <input type="hidden" name="id" value="<?=$kategori->id_kategori?>">
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Dengan Menghapus ' +'<?=$kategori->kategori?>'+' Maka Artikel yang Memiliki Kategori '+'<?=$kategori->kategori?>'+ ' akan terhapus ?')"><i class="fa fa-trash"></i></button>
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