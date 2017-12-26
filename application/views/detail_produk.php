<?php $this->load->view('layout/top') ?>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Detail Koleksi
                </h2>
            </div>
            <div class="col-md-9">
                <div class="detail-produk">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="image-detail wow bounceInDown">
                                <?php $image =[ 'src'=> 'uploads/produk/' . $produk->image];
                        			echo img($image)
                    			?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h3><?=$produk->nama_produk?></h3>
                            <div class="detail-deskripsi">
                                <p><?=$produk->deskripsi?></p>
                                <?php
                                    $x = $produk->harga;
                                    $y = $produk->diskon;
                                    $z = 100;
                                    $min = ($x * $y)/$z;
                                    $harga_diskon = $x - $min;
                                ?>
                                <?php 
                                    if($produk->diskon > 0){
                                ?>
                                <h4>DISKON: <span class="harga2"><?=$produk->diskon?> %</span> </h4>
                                <h4>HARGA: <span class="harga">Rp <s><?=$produk->harga?></s></span> <span class="diskon">Rp <?=$harga_diskon?></span></h4>
                                <?php }else{?>
                                <h4>HARGA: <span class="harga2">Rp<?=$produk->harga?></h4>
                                <?php } ?>
                                <div class="beli-tombol">
                                    <button class="btn btn-join btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">Beli Produk</button>
                                    <?=anchor('page_produk/add_to_cart/' . $produk->id_produk, 'Buy' , [
                                    'class' => 'btn btn-primary',
                                    'role'  => 'button'
                                    ])?>
                                </div>
                            </div>
                            <div class="center-block">
                                <p class="txt-railway">Bagikan</p>
                                <a href="" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                                <a href="" target="_blank"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                                <a href="" target="_blank"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                            </div>
                        </div>
                        <div class="komentar">
                            <?= form_open_multipart('page_produk/komentar', ['role'=>'form', 'class'=>'contact-form']) ?>
                                <input type="text" name="id_produk" value="<?=$produk->id_produk?>">
                                <textarea name="komen" class="form-control" ></textarea>
                                <input name="submit" type="submit" id="submit" class="btn btn-primary" value="Kirim">
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>

             <div class="other-product">
             	<h2 class="page-header">
                    Koleksi Lainnya
                </h2>
             	<div class="row">
             		<?php foreach($other as $other): ?>
             			<?php $url = $other->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
             		<div class="col-sm-4 col-lg-4 col-md-4 wow bounceInLeft">
                        <div class="thumbnail">
                            <div class="product-categori">
                                <div class="product-kategori">
                                	<?php $image =[ 'src'=> 'uploads/produk/' . $other->image];
                        				echo img($image)
                    				?>
                                </div>
                                <div class="product-view">
                                    <ul class="nav nav-pills">
                                    	<li><?=anchor('page_produk/detail/'.$other->id_produk .'/'.$nama, 'Beli')?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                	<?php endforeach; ?>
             	</div>
             </div>

            </div>

            <div class="col-md-3">
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Top Koleksi</h3>
                        <?php foreach ($top as $top): ?>
                        <?php $url = $top->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
                        
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                <?php $image =[ 'src'=> 'uploads/produk/' . $top->image]; echo img($image)?>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4><a href="<?php echo base_url() ?>index.php/page_produk/detail/<?=$top->id_produk?>/<?=$title?>"><?=$top->nama_produk?></a></h4>
                            </div>
                        </div>

                    	<?php endforeach;?>
                        
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Kategori</h3>
                        <ul class="nav navbar-stacked">
                        	<?php foreach($kategori as $kategori): ?>
                        	<?php $url = $kategori->nama_kategori; $nama = strtolower($url); $title = url_title($nama);?>
                            <li><?php echo anchor('page_produk/koleksi/'.$kategori->id_kategori.'/'.$title, $kategori->nama_kategori);?></li>
                        	<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Sosial Media</h3>
                        <ul class="sosial-media">
                            <li><a href="https://www.facebook.com/Dewim-fashion-1660169040896663/" target="_blank"><img src="<?php echo base_url() ?>resource/images/Facebook.png" class="img-hover"></a></li>
                            <li><a href="http://instagram.com/dewimfashion" target="_blank"><img src="<?php echo base_url() ?>resource/images/Instagram.png" class="img-hover"></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Pembelian</h3>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-4">
        			<?php $image =[ 'src'=> 'uploads/produk/' . $produk->image,'class'=>'img-responsive'];
                        echo img($image)
                    ?>
        		</div>
        		<div class="col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama Koleksi</td>
                            <td>:</td>
                            <td><?=$produk->nama_produk?></td>
                        </tr>
                        <?php 
                            $x = $produk->harga;
                            $y = $produk->diskon;
                            $z = 100;
                            $min = ($x * $y)/$z;
                            $harga_diskon = $x - $min;
                        ?>
                        <?php 
                            if($produk->diskon > 0){
                        ?>
                        <tr>
                            <td>Diskon</td>
                            <td>:</td>
                            <td>Rp. <?=$produk->diskon?> %</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td>Rp. <?=$harga_diskon?></td>
                        </tr>
                        <?php }else{?>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td>Rp. <?=$produk->harga?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <p>Jika anda berminat dengan koleksi kami silahkan hubungi nomor telepon dibawah ini</p>
                    <p>
                    <h4>Telpon: <?=$telpon->value;?></h4> 
                    </p>
                    <p>nomor berikut bisa dihubungi via whatsapp</p>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-join" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('layout/bottom')?>

                                