<?php $this->load->view('layoutadmin/top') ?>
<?php
	$id_setting = $atur->id_setting;
?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Pengaturan</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-cog"></i> Pengaturan</a></li>
	        <li class="active">Edit Pengaturan</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Edit Pengaturan</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('setting/ubah/'. $id_setting) ?>
	            		<div class="box-body">
	            			<div class="form-group">
				                <label for="exampleInputEmail1"><?=$atur->setting?></label>
				                <input type="text" class="form-control"  value="<?=$atur->value?>" name="value">
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