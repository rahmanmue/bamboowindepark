
<div class="container mt-5">

<div class="card" style="margin:80px 0 80px 0;">
<h5 class="card-header text-center text-uppercase"><?=$title?></h5>
<div class="card-body">
<div id="border">

<form action="<?=$action;?>" method="post" enctype="multipart/form-data">
	<div class="row">
      <div class="col-md-12">
         <div class="form-group form-group-lg">
            <label class="font-weight-bold">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= set_value('judul', $berita->judul ??'');?>">
            <?php 
               if($title == "Tambah Berita"){
                  echo "
                     <small class='form-text text-danger'>".form_error('judul')."</small>
                  ";
               }
            ?>
            
         </div>
      </div>


	<div class="col-md-6">
      <div class="form-group form-group-lg">
      <label class="font-weight-bold">Status Berita</label>
         <select name="status" class="form-control" required>
            <option value="publish">Publikasikan</option>
            <option value="draft" <?php if($title == "Edit Berita" && $berita->status == "draft"){ echo "selected";} ?>>Simpan sebagai Draft</option>
         </select>
      </div>
	</div>

	<div class="col-md-6">
      <div class="form-group">
         <label class="font-weight-bold">Kategori Berita</label>
            <select name="id_kategori" class="form-control" required>
               <?php foreach($listKategori as $kategori):?>
                  <option value="<?= $kategori->id_kategori;?>"
                        <?php if ($title == "Edit Berita"){
                              if( $berita->id_kategori == $kategori->id_kategori){echo"selected";}
                        }?>>
                        <?= $kategori->kategori;?>
                  </option>
               <?php endforeach;?>
            </select>
      </div>
	</div>



<?php if($title == "Edit Berita") {
	echo
	"
   <div class='col-md-4'>
	   <img src='".base_url('assets/uploads/cover/'.$berita->gambar)."' width='250px'>
	</div>";

	echo "
	<div class='col-md-8'>
      <div class='form-group'>
         <label for='keterangan'class='font-weight-bold'>Upload Gambar Cover</label><small> (Ukuran dibawah 2mb) </small>
         <div class='custom-file'>
            <input type='file' class='custom-file-input' id='customFile' name='gambar'>
            <label class='custom-file-label' for='customFile'>Pilih Gambar minimal ukuran (600 x 400)</label>
         </div>
         <small class='text-info'> Biarkan Jika tidak Ada & Jika tidak sesuai dengan format atau Ukuran Gambar maka gambar di set ke sebelumnya </small>
      </div>
	</div>";
}else{
	echo"
	<div class='col-md-12'>
      <div class='form-group'>
         <label for='keterangan'class='font-weight-bold'>Upload Gambar Cover</label><small> (Ukuran dibawah 2mb) </small>
         <div class='custom-file'>
            <input type='file' class='custom-file-input' id='customFile' name='gambar' required>
            <label class='custom-file-label' for='customFile'>Pilih Gambar minimal ukuran (600 x 400)</label>
         </div>
      </div>
	</div>";
}

?>


	<div class="col-md-12 mt-3">		
		<div class="form-group">
         <label class="font-weight-bold">Isi Berita</label>
         <textarea name="content" rows ="300" placeholder="Isi Berita" id="tinymce" class="form-control"><?=set_value('content',$berita->content ??'')?></textarea>
		</div>
		
		<div class="form-group">

      <input type='hidden' name ='gambarLama' value="<?=$berita->gambar??''?>">
      <input type="hidden" name = "id" value="<?=$berita->id_berita??'';?>">
		

		<input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg float-right">
		<input type="submit" name="submit" value="<?=$button;?>" class="btn btn-primary btn-lg float-right mr-1">
		</div>

	</div>
</div>

</form>
</div>
</div>
</div>
</div>