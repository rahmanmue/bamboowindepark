<div class="container mt-5">


   <div class="card" style="margin-top:80px;">
         <div class="card-header font-weight-bold text-center">
            <?=$title?>
         </div>
        
         <div class="card-body">
          <form action="<?=$action?>" method="post">
            
            <input type="hidden" name="id" value="<?= $user->id_auth; ?>">
            <div class="col-auto">
               <?php  if($this->session->flashdata('gagal')){
                     $alert = $this->session->flashdata('alert');
                     echo 
                     '<div class="alert alert-danger alert-dismissible fade show" role="alert">'. 
                        $this->session->flashdata('gagal'). '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>';
                  } ?>
            </div>

            <div class="col-auto">
               <label class="sr-only" for="inlineFormInputGroup">Nama</label>
               <div class="input-group mb-2">
               <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-tag"></i></div>
               </div>
               <input type="text" class="form-control" id="inlineFormInputGroup" name="nama" placeholder="Nama"  required  value="<?= $user->nama; ?>">
               </div>
            </div>

            <div class="col-auto">
               <label class="sr-only" for="inlineFormInputGroup">Email</label>
               <div class="input-group mb-2">
               <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
               </div>
               <input type="email" class="form-control" id="inlineFormInputGroup" name="email" placeholder="Alamat email" required value="<?= $user->email; ?>">
               </div>
            </div>

            <div class="col-auto">
               <label class="sr-only" for="inlineFormInputGroup">Password</label>
               <div class="input-group mb-2">
               <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-key"></i></div>
               </div>
               <input type="hidden" name="passwordLama" value="<?= $user->password; ?>">
               <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ketik password baru jika ingin diganti atau biarkan kosong" name="password" >
               </div>
            </div>

            <div class="col-auto">
               <label class="sr-only" for="inlineFormInputGroup">Status</label>
               <div class="input-group mb-2">
               <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-eye"></i></div>
               </div>
               <?php if($userAktif->status == 'admin'){?>
                  <input type="text" name="status" class="form-control" placeholder="status" required value="<?= $userAktif->status; ?>" readonly disabled>
               <?php }else if($userAktif->status == 'superadmin'){?>
                  <select name="status" class="form-control">
                      <option value="superadmin" <?php if( 'superadmin'== $user->status) {echo"selected";}?>>Super Admin</option>
                      <option value="admin" <?php if( 'admin'== $user->status) {echo"selected";}?>>Admin</option>
                  </select>
               <?php }?>               
               </div>
            </div>        
   
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary ml-3">
            <a href="<?= base_url('admin')?>" class="btn btn-warning">Kembali</a>
         </form>
        
      
   </div>
</div>

</div>
