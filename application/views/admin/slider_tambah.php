<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Slider</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-picture-o"></i> SLider</a></li>
	        <li class="active">Tambah Slider</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Tambah Slider</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('slider/tambah', ['role'=>'form']) ?>
	            		<div class="box-body">
                			<div class="form-group">
				                <label>Gambar</label>
				                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="userfile">
                			</div>
                			<div class="form-group">
				                <label>Title Slide</label>
				                <input type="text" class="form-control"  placeholder="Masukan Title" name="title">
                			</div>
                			<div class="form-group">
				                <label>Alt Slide</label>
				                <input type="text" class="form-control"  placeholder="Masukan Alt" name="alt">
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