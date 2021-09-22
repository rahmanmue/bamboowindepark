<div class="container">

<div class="row mt-5 justify-content-center">
   <div class="col-md-4 ">

   <div class="card">
         <div class="card-header font-weight-bold text-center">
            <h4 class="text-bold">Masuk Akun</h4>
         </div>
         <div class="card-body">
            <?php
               if($this->session->flashdata('pesan')){
                  $alert = $this->session->flashdata('alert');
                  echo 
                  '<div class="alert '.$alert.' alert-dismissible fade show" role="alert">'. 
                     $this->session->flashdata('pesan'). '
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>';
               }
            ?>
          <form action="" method="post">
            <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control r-30" id="email" name="email" >
               <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control r-30" id="password" name="password" >
               <small class="form-text text-danger"><?= form_error('password'); ?></small>
            </div>
            <button type="submit" name="login" class="btn btn-primary col-md-12">Masuk Akun</button>
            </form>
         </div>
         </div>
      
   </div>
</div>

</div>