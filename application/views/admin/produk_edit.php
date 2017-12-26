<?php $this->load->view('layoutadmin/top') ?>
<?php
	$id_produk = $produk->id_produk;
?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Produk</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-tags"></i> Produk</a></li>
	        <li class="active">Edit Produk</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Edit Produk</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('produk/ubah/'. $id_produk) ?>
	            		<div class="box-body">
	            			<div class="form-group">
				                <label>Kategori</label>
				                <select class="form-control" name="id_kategori">
				                	<option value="<?=$produk->id_kategori?>" selected><?=$produk->nama_kategori?></option>
				                	<?php if($produk->id_kategori > 0){ ?>
                        			<?php foreach($kategoris as $item): ?>
                            			<option value="<?=$item->id_kategori?>"><?=$item->nama_kategori?></option>
                        			<?php endforeach;?>
                        			<?php }else{ ?>
                        			<?php foreach($kategoris as $item): ?>
                            			<option value="<?=$item->id_kategori?>"><?=$item->nama_kategori?></option>
                        			<?php endforeach;?>
                        			<?php }?>
                        		</select>
                			</div>
	            			<div class="form-group">
				                <label>Nama Produk</label>
				                <input type="text" class="form-control"  value="<?=$produk->nama_produk?>" name="nama_produk">
                			</div>
                			<div class="form-group">
				                <label>Harga</label>
				                <input type="text" class="form-control"  value="<?=$produk->harga?>" name="harga">
                			</div>
                			<div class="form-group">
				                <label>Diskon</label>
				                <input type="text" class="form-control"  value="<?=$produk->diskon?>" name="diskon">
				                <small>Nilai 0 - 100 %</small>
                			</div>
                			<div class="form-group">
				                <label>Deskripsi Produk</label>
				                <textarea class="form-control textarea"  name="deskripsi"><?=$produk->deskripsi?></textarea>
                			</div>
                			<div class="form-group">
				                <label>Gambar</label>
				                <p>
				                <?php $image = [    'src'   => 'uploads/produk/' . $produk->image, 'class' => 'img-responsive', 'style'=>'width:200px;'];
					                if(!isset($produk->image[0])){
	                                	echo "Gambar tidak ada.";
	                            	}else{
	                            		echo img($image);
	                            	}
                            	?>	
                            	</p>
                            	<p><small>Klik tombol dibawah untuk ganti gambar</small></p>
				                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="userfile">
                			</div>
                			<div class="box-footer">
                				<button type="submit" class="btn btn-primary">Submit</button>
              				</div>
	            		</div>
	            	<?= form_close() ?>
				</div>
			</div>
		</div>
	</section>

</div>
<?php $this->load->view('layoutadmin/down') ?>