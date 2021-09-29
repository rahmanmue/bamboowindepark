
<div class="container mt-5">

<div class="card">
<h5 class="card-header text-center text-uppercase"><?=$title?></h5>
<div class="card-body">
<div id="border">

<form action="<?=$action;?>" method="post" enctype="multipart/form-data">
	<div class="row">
      <div class="col-md-12">
         <div class="form-group form-group-lg">
            <label class="font-weight-bold">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= set_value('judul', $katalog->judul ??'');?>">
            <?php 
               if($title == "Tambah Katalog"){
                  echo "
                     <small class='form-text text-danger'>".form_error('judul')."</small>
                  ";
               }
            ?>
            
         </div>
      </div>


	<div class="col-md-12">
      <div class="form-group form-group-lg">
      <label class="font-weight-bold">Status</label>
         <select name="status" class="form-control" required>
            <option value="publish">Publikasikan</option>
            <option value="draft" <?php if($title == "Edit Berita" && $katalog->status == "draft"){ echo "selected";} ?>>Simpan sebagai Draft</option>
         </select>
      </div>
	</div>



<?php if($title == "Edit Katalog") {
	echo
	"
   <div class='col-md-4'>
	   <img src='".base_url('assets/uploads/katalog/'.$katalog->gambar)."' width='250px'>
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
         <div class="form-group form-group-lg">
            <label class="font-weight-bold">Klasifikasi</label>
            <input type="text" name="klasifikasi" class="form-control" value="<?= set_value('klasifikasi', $katalog->klasifikasi ??'');?>">      
         </div>
      
        <div class="form-group">
            <label class="font-weight-bold">Deskripsi</label>
            <textarea name="deskripsi" placeholder="Deskripsi" id="editor"  class="form-control"><?=set_value('deskripsi',$katalog->deskripsi ??'')?></textarea>
	    </div>

        <div class="form-group">
            <label class="font-weight-bold">Manfaat</label>
            <textarea name="manfaat" placeholder="Manfaat" id="editor2"  class="form-control"><?=set_value('manfaat',$katalog->manfaat ??'')?></textarea>
	    </div>
		





        <div class="form-group">
            <input type='hidden' name ='gambarLama' value="<?=$katalog->gambar??'default.png'?>">
            <input type="hidden" name = "id" value="<?=$katalog->id_katalog??'';?>">
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