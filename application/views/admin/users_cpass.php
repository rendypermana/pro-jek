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
              <h3 class="box-title">Ganti Password</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?=$this->session->flashdata('edit')?>
              <div><?= validation_errors() ?></div>
                <?= form_open_multipart('users/update_password/'. $id_users) ?>
                  <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" name="passconf">
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