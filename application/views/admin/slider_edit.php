<?php $this->load->view('layoutadmin/top') ?>
<?php
	$id_slider = $slide->id_slider;
?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Slider</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-cog"></i> Slider</a></li>
	        <li class="active">Edit Slider</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Edit Slider</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('slider/ubah/'. $id_slider) ?>
	            		<div class="box-body">
	            			<?php $image =[ 'src'=> 'uploads/slide/' . $slide->gambar];
                        		echo img($image)
                    		?>
                    		<div class="form-group">
				                <label>Gambar</label>
                    			<p><small>Klik tombol dibawah untuk ganti gambar</small></p>
				                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="userfile">
				            </div>
	            			<div class="form-group">
				                <label for="exampleInputEmail1">Title Slider</label>
				                <input type="text" class="form-control"  value="<?=$slide->title?>" name="title">
                			</div>
	            			<div class="form-group">
				                <label for="exampleInputEmail1">Alt Slider</label>
				                <input type="text" class="form-control"  value="<?=$slide->alt?>" name="alt">
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