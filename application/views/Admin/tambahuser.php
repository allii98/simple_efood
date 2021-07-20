<div class="container" style="height: 600px;">
  <div class="mb-5 text-center">
    <h2>Tambah User</h2>
    <hr>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username">
            <small class="form-text text-danger"><?= form_error('username');?></small>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input  class="form-control" type="text" name="password" id="password">
          <small class="form-text text-danger"><?= form_error('password');?></small>
        </div>
        
        <div class="form-group">
          <label for="nama">Nama</label>
          <input  class="form-control" type="text" name="nama" id="nama">
          <small class="form-text text-danger"><?= form_error('nama');?></small>
        </div>
      </div>
      
      <div class="col-4">
        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input  class="form-control" type="text" name="no_telp" id="no_telp">
          <small class="form-text text-danger"><?= form_error('no_telp');?></small>
        </div>

     <!--    <div class="form-group">
          <label for="level">Level</label>
          <input  class="form-control" type="text" name="level" id="level">
          <small class="form-text text-danger"><?= form_error('level');?></small>
        </div> -->

        <div class="form-group">
      <label>Level</label>
      <select name="level" aria-controls="example1" class="form-control input-sm"><option value="admin">admin</option><option value="user">user</option></select>
      <p class="text-red"><?php echo form_error('level');?></p>
    </div>
        
        
        <button type="submit" class="btn btn-primary mr-4">Kirim</button>
        <a class="btn btn-danger" rel="stylesheet" onclick="return confirm('yakin kembali?')" href="<?= base_url().'akun';?>">Kembali</a>
      </div>    
    </div>
  </form>
</div>