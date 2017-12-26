<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Produk</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dropbox"></i> Produk</a></li>
	        <li class="active">Tambah Produk</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Tambah Produk</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('produk/tambah', ['role'=>'form']) ?>
	            		<div class="box-body">
	            			<div class="form-group">
				                <label>Kategori</label>
				                <select class="form-control" name="id_kategori">
                        			<?php foreach($kategoris as $item): ?>
                            			<option value="<?=$item->id_kategori?>"><?=$item->nama_kategori?></option>
                        			<?php endforeach;?>
                        		</select>
                			</div>
                			<div class="form-group">
				                <label>Nama Produk</label>
				                <input type="text" class="form-control"  placeholder="Masukan Nama Produk" name="nama_produk">
                			</div>
                			<div class="form-group">
				                <label>Harga</label>
				                <input type="text" class="form-control" name="harga">
                			</div>
                			<div class="form-group">
				                <label>Diskon</label>
				                <input type="text" class="form-control" name="diskon">
				                <small>Nilai 0 - 100 %</small>
                			</div>
                			<div class="form-group">
				                <label>Deskripsi Produk</label>
				                <?php  
									$isi = array('name' => 'isi', 'class' => 'textarea', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;', 'placeholder' => 'Tulis Deskripsi Produk', 'name' => 'deskripsi');
									echo form_textarea($isi);
								?>
                			</div>
                			<div class="form-group">
				                <label>Gambar</label>
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