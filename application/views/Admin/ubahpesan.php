<div class="container" style="height: 600px;">
  <div class="mb-5 text-center">
    <h2>Edit Pesanan</h2>
    <hr>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <input type="hidden" name="id_pesanan" value="<?= $pesan['id_pesanan'];?>">
      <div class="col-4">
       <!--  <div class="form-group">
            <label for="nama_brg">Nama Pemesan</label>
            <input value="<?= $pesan['nama'];?>" class="form-control" type="text" name="nama" id="nama">
        </div> -->
<!-- 
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input value="<?= $pesan['alamat'];?>"  class="form-control" type="text" name="alamat" id="alamat">
        </div> -->
        
        <div class="form-group">
          <label for="nama_brg">Nama Makanan</label>
          <input value="<?= $pesan['nama_brg'];?>" class="form-control" type="text" name="nama_brg" id="nama_brg">
        </div>
      </div>
      
      <div class="col-4">
        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input value="<?= $pesan['jumlah'];?>" class="form-control" type="text" name="jumlah" id="jumlah">
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input value="<?= $pesan['harga'];?>" class="form-control" type="text" name="harga" id="harga">
        </div>
        
        <!-- <div class="form-group">
          <label for="tgl_pesan">Tanggal Pesanan</label>
          <input value="<?= $pesan['tgl_pesan'];?>" class="form-control" type="text" name="tgl_pesan" id="tgl_pesan">
        </div>
         -->
        <!-- <div class="form-group">
          <label for="batas_bayar">Batas Bayar</label>
          <input value="<?= $pesan['batas_bayar'];?>" class="form-control" type="text" name="batas_bayar" id="batas_bayar">
        </div> -->
        <button type="submit" class="btn btn-primary mr-4" onclick="return confirm('Yakin mau ubah data?')">Ubah</button>
        <a class="btn btn-danger" rel="stylesheet" onclick="return confirm('Yakin mau kembali?')" href="<?= base_url();?>admin">Kembali</a>
      </div>    
    </div>
  </form>
</div>