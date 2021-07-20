   <section class="section">
  <div class="section-header">
        
                
<h3><i class="fa fa-boxes"></i>Daftar Makanan</h3>
<hr>
</div>

<div class="section-body">
              
   
    <li class="nav-item active text-light">
        <?php
         $keranjang = '<i class="fa fa-cart-arrow-down"></i> '.$this->cart->total_items(). ' items'
        ?>
        
        <?= anchor('guest/keranjang',$keranjang);?>
      </li>

<div class="row">
  <?php foreach( $barang  as $b ): ?>
    <div class="card m-2 border-dark" style="width: 18rem;box-shadow: 1px 1px 2px;">
      <img src="<?= base_url().'uploade/'.$b['gambar'];?>" class="card-img-top" alt="gambar tidak muncul">
      <div class="card-body">
        <h5 class="card-title mb-1"><?= $b['nama_brg'];?></h5>
        <small><b><?= $b['keterangan'];?></b></small><br>
        <span class="badge badge-success mb-2">Rp. <?= number_format($b['harga'], 0,',','.');?></span>
        <span class="badge badge-danger" >Stok <?= $b['stok'];?></span> <br>
        <?= anchor('guest/tambah_keranjang/'.$b['id_brg'],'<div class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Keranjang</div>');?>
        
       <!--  <a href="#" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> Detail</a> -->
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>
</section>
