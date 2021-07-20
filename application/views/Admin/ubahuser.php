<div class="container" style="height: 600px;">
  <div class="mb-5 text-center">
    <h2>Edit User</h2>
    <hr>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <input type="hidden" name="id_user" value="<?= $userr['id_user'];?>">
      <div class="col-4">
        <div class="form-group">
            <label for="username">Username</label>
            <input value="<?= $userr['username'];?>" class="form-control" type="text" name="username" id="username">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input value="<?= $userr['password'];?>"  class="form-control" type="text" name="password" id="password">
        </div>
        
        <div class="form-group">
          <label for="nama">Nama</label>
          <input value="<?= $userr['nama'];?>" class="form-control" type="text" name="nama" id="nama">
        </div>
      </div>
      
      <div class="col-4">
        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input value="<?= $userr['no_telp'];?>" class="form-control" type="text" name="no_telp" id="no_telp">
        </div>

       <!--  <div class="form-group">
          <label for="level">Level</label>
          <input value="<?= $userr['level'];?>" class="form-control" type="text" name="level" id="level">
        </div> -->

        <div class="form-group">
      <label>Level</label>
      <select name="level" aria-controls="example1" class="form-control input-sm"><option value="admin">admin</option><option value="user">user</option></select>
      <p class="text-red"><?php echo form_error('level');?></p>
    </div>
        
        
        
        <button type="submit" class="btn btn-primary mr-4" onclick="return confirm('Yakin mau ubah data?')">Ubah</button>
        <a class="btn btn-danger" rel="stylesheet" onclick="return confirm('Yakin mau kembali?')" href="<?= base_url().'akun';?>">Kembali</a>
      </div>    
    </div>
  </form>
</div>