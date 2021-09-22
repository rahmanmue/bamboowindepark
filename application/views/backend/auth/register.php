<div class="container ">


<div class="row justify-content-center mt-5">
   <div class="col-md-4 ">

   <div class="card">
         <div class="card-header text-center">
            <h4 class="text-bold">Daftar Akun</h4>
         </div>
         <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
            <label for="nama">Nama</label>
               <input type="text" class="form-control r-30" id="nama" name="nama" value="<?= set_value('nama');?>">
               <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control r-30" id="email" name="email" value="<?= set_value('email');?>">
               <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control r-30" id="password" name="password" >
               <small class="form-text text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="form-group">
               <label for="konfirmasipw">Konfirmasi Password</label>
               <input type="password" class="form-control r-30" id="konfirmasi" name="konfirmasi" >
               <small class="form-text text-danger"><?= form_error('konfirmasi'); ?></small>
            </div>
           
            <button type="submit" name="register" class="btn btn-primary col-md-12">Daftar</button>
            </form>
         </div>
         </div>
      
   </div>
</div>

</div>