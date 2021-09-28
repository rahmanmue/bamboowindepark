<div class="container mt-5">

      <div class="card">
      <h5 class="card-header text-center text-uppercase"><?=$title?></h5>
            <div class="card-body">
             <form action="<?=$action;?>" method="post" enctype="multipart/form-data">
              <div class="row">
               <div class="form-group col-md-12">
                  <label  class="font-weight-bold">Judul Banner</label>
                  <input type="text"  name="banner" class="form-control" value="<?= set_value('banner', $banner->banner ?? '');?>" required>
               </div>

               <?php if($title == 'Edit Banner') {
               echo "
               <div class='row mb-2'>
               <img src='".base_url('assets/uploads/banner/'.$banner->gambar)."' width='100px' class='col-md-4 ml-3'>
                   <div class='form-group col-md-7 ml-3'>
                   <label class='font-weight-bold'>Upload Gambar</label><small> (Ukuran dibawah 1mb) </small>
                   <div class='custom-file'>
                     <input type='file' class='custom-file-input' id='customFile' name='gambar'>
                     <label class='custom-file-label' for='customFile'>Pilih Gambar minimal ukuran (300 x 250)</label>
                  </div>
                     <small class='text-info'> Biarkan Jika tidak Ada & Jika tidak sesuai dengan format atau Ukuran Gambar maka gambar di set ke sebelumnya </small>                  
                  </div>
               </div>";
            }else{
              echo
              " <div class='form-group col-md-12'>
               <label for='keterangan'class='font-weight-bold'>Upload Gambar</label><small> (Ukuran dibawah 1mb) </small>
               <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='customFile' name='gambar' required>
                  <label class='custom-file-label' for='customFile'>Pilih Gambar minimal ukuran (300 x 250)</label>
               </div>
               </div>";
            }

            ?>
              
               
               <div class="ml-3">
               <p class="font-weight-bold" >Status Banner</p>
                  <div class="form-check d-inline mr-4" >
                     <input class="form-check-input" type="radio" name="status" value="ON" <?= $title == 'Edit Banner' && $banner->status == 'ON' ?'checked' :''?>>
                     <label class="form-check-label">
                        ON
                     </label>
                  </div>
                     <div class="form-check d-inline"  style="display: inline-block;">
                     <input class="form-check-input" type="radio" name="status" value="OFF" <?= $title == 'Edit Banner' && $banner->status == 'OFF' ?'checked' :''?>>
                     <label class="form-check-label">
                        OFF
                     </label>
                  </div>
                  <small class="form-text text-danger"><?= $title == 'Edit Banner' ?'': form_error('status'); ?></small>
               </div>

               
              
              <input type="hidden" name="gambarLama" value="<?=$banner->gambar ??'kosong'?>">
               <input type="hidden" name='id' value="<?= $banner->id_banner ?? '';?>"> 
               <div class="form-group col-md-12">
                  <button type="reset" name="reset" class="btn btn-danger float-right ">Reset</button>
                  <button type="submit" name="simpan" class="btn btn-primary float-right mr-1"><?=$button;?></button>
               </div>
               </div>
               </form>
               
            </div>
         </div>
         
    

</div>