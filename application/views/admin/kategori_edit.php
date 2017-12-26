<?php $this->load->view('layoutadmin/top') ?>
<?php
	$id_kategori = $item->id_kategori;
?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Kategori</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-tags"></i> Kategori</a></li>
	        <li class="active">Edit Kategori</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Edit Kategori</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('kategori/ubah/'. $id_kategori) ?>
	            		<div class="box-body">
	            			<div class="form-group">
				                <label for="exampleInputEmail1">Kategori</label>
				                <input type="text" class="form-control"  value="<?=$item->nama_kategori?>" name="nama_kategori">
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