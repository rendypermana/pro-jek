<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Blog</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-file-text"></i> Blog</a></li>
	        <li class="active">Tambah Artikel</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Tambah Artikel</h3>
	            	</div>
	            	<div><?= validation_errors() ?></div>
	            	<?= form_open_multipart('blog/tambah', ['role'=>'form']) ?>
	            		<div class="box-body">
                			<div class="form-group">
				                <label>Judul</label>
				                <?php $id_user=$this->session->userdata('id_users');?>
				                <input type="text" class="hidden"  name="id_users" value="<?php echo $id_user?>" >
				                <input type="text" class="form-control"  placeholder="Masukan Judul" name="judul">
                			</div>
                			<div class="form-group">
				                <label>Konten</label>
				                <?php  
									$isi = array('name' => 'isi', 'class' => 'textarea', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;', 'placeholder' => 'Tulis Konten Artikel', 'name' => 'konten');
									echo form_textarea($isi);
								?>
                			</div>
                			<div class="form-group">
				                <label>Gambar</label>
				                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="userfile">
				                <input type="text" class="hidden"  name="tgl_post" value="<?php $tgl_post = date('d/m/Y'); echo "$tgl_post";?>">
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