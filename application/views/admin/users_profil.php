<?php $this->load->view('layoutadmin/top') ?>
<?php
  $id_users = $users->id_users;
?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Profil</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
	        <li class="active">Profil Administrator</li>
	    </ol>
	</section>

  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Profil Anda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?=$this->session->flashdata('edit')?>
              <div><?= validation_errors() ?></div>
                <?= form_open_multipart('users/update/'. $id_users) ?>
                  <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama_users" value="<?=$users->nama_users?>">
                  </div>
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?=$users->username?>">
                  </div>
                  <div class="form-group">
                      <p><?php echo anchor('users/update_password/' .$users->id_users, 'Ganti Password?');?></p>
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php $this->load->view('layoutadmin/down') ?>