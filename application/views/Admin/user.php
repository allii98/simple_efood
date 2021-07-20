<div class="container" style="height: 800px;">
  <div class="contaier-fluid mb-5 text-center">
    <h2>Kelola Akun</h2>
  </div>
  <a href="<?= base_url()?>akun/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
  <?php if($this->session->flashdata('flash')): ?>
    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
      Data User <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($this->session->flashdata('flash_hapus')): ?>
    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
      Data User <strong>Berhasil</strong> <?= $this->session->flashdata('flash_hapus');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php elseif($this->session->flashdata('flash_ubah')): ?>
      <div class="mt-3 alert alert-info alert-dismissible fade show" role="alert">
        Data User <strong>Berhasil</strong> <?= $this->session->flashdata('flash_ubah');?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <?php endif; ?>
  <hr>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>NO</th>
        <th>Id Pengguna</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Level</th>
        <th class="text-center" colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      foreach( $userr  as $b ): ?>
          <tr>
            <td><?= $no++;?></td>
            <td><?= $b['id_user'];?></td>
            <td><?= $b['username'];?></td>
            <td><?= $b['password'];?></td>
            <td><?= $b['nama'];?></td>
            <td><?= $b['no_telp'];?></td>
            <td><?= $b['level'];?></td>
            <td class="text-center">
              <a class="btn btn-danger" onClick="return confirm('Hapus User?')" title="hapus data" rel="stylesheet" href="<?= base_url();?>akun/hapus/<?= $b['id_user']?>"><i class="fa fa-trash-alt"></i></a>
              <a class="btn btn-success" title="edit data" rel="stylesheet" href="<?= base_url();?>akun/update/<?= $b['id_user']?>"><i class="fa fa-edit"></i></a>
            </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

