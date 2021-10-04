<div class="container mt-5">

      <div class="card" style="margin:80px 0 80px 0;">
      <h5 class="card-header text-center text-uppercase"><?=$title?></h5>
            <div class="card-body">
             <form action="<?=$action;?>" method="post" enctype="multipart/form-data">
              <div class="row">
               <div class="form-group col-md-12">
                  <label  class="font-weight-bold">Nama Kategori</label>
                  <input type="text"  name="kategori" class="form-control" value="<?= set_value('kategori', $kategori['kategori'] ?? '');?>">
               </div>
               
               
               <div class="form-group col-md-12">
                  <label class="font-weight-bold" >Urutan</label>
                  <input type="number" min="1" class="form-control"  name="urutan" value="<?= set_value('urutan', $kategori['urutan'] ?? '1');?>">
                  <small class="form-text text-danger"><?= form_error('urutan'); ?></small>
               </div>
              
               <input type="hidden" name='id' value="<?= $kategori['id_kategori'] ?? '';?>">     
               <div class="form-group col-md-12">
                  <button type="reset" name="reset" class="btn btn-danger float-right ">Reset</button>
                  <button type="submit" name="simpan" class="btn btn-primary float-right mr-1"><?=$button;?></button>
               </div>
               </div>
               </form>
               
            </div>
         </div>
         
    

</div>