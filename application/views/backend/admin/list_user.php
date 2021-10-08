
<div class="container my-5">
<div class="card p-4" style="margin-top:100px;">
   
   <?php if($this->session->flashdata('alertAdmin') == 'alert alert-success') {?>
      <div class="<?=$this->session->flashdata('alertAdmin')?> alert-dismissible fade show" role="alert">
      <?=$this->session->flashdata('pesan')?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
   <?php }?>

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="table">
<thead>
    <tr class="font-weight-bold">
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
        <?php if($userAktif->status == 'superadmin'){?>
        <th class="text-center">Aksi</th>
        <?php } ?>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach ($listUser as $user) { ?>
    <tr class="odd gradeX">
        <td><?= $i ?></td>
        <td><?= $user->nama ;?></td>
        <td><?= $user->email ;?></td>
        <td><?= $user->status ;?></td>
        <?php if($userAktif->status == 'superadmin'){?>
        <td>
        <div class="text-center" >
            <form action="<?=base_url('list-admin/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$user->id_auth?>">
               <button type="submit" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></button>
            </form>
            <form action="<?=base_url('list-admin/hapus')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$user->id_auth?>">
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')"><i class="fa fa-trash"></i></button>
            </form>
            </div>
    
        </td>
        <?php } ?>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
</div>
</div>
</div>