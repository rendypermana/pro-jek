<?php $this->load->view('layout/top')?>
<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Daftar Reseller Baru
                </h2>
            </div>

            <div class="col-lg-12">
                <div class="reseller-area">
                    <div class="row">
                        <div class="col-lg-6">
                        <?=$this->session->flashdata('success')?>
                            <h3 class="reseller-login">Data Diri</h3>
                            <?php echo form_open('page_reseller/daftar') ?>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_users" class="form-control">
                                    <span class="text-danger"><?php echo form_error('nama_users'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telpon</label>
                                    <small><p>direkomendasikan terhubung dengan aplikasi Whatsapp</p></small>
                                    <input type="text" name="telp" class="form-control">
                                    <span class="text-danger"><?php echo form_error('telp'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                    <span class="text-danger"><?php echo form_error('alamat'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" name="password-conf" class="form-control">
                                    <span class="text-danger"><?php echo form_error('password-conf'); ?></span>
                                </div>
                                <input type="submit" name="submit" value="Masuk" class="btn btn-join">
                            <?php echo form_close(); ?>
                        </div>
                        <div class="col-lg-6">
                        	<div class="banner-area">
	                            <div class="signup-banner">
	                                <h4 class="reseller-login">Raih keuntungan dengan menjadi reseller kami</h4>
	                                <div class="text-center">
	                                	<img src="<?php echo base_url() ?>resource/images/baner.png">
	                                </div>
	                                <ol>
	                                	<li>Kamu hanya akan fokus pada pemasaran saja tidak perlu memikirkan masalah produksi</li>
	                                	<li>Potensi kerugian kamu relatif kecil</li>
	                                	<li>Kamu akan dapat diskon khusus sebagai reseller</li>
	                                	<li>Bisa jualan hanya dengan modal mainin HP</li>
	                                </ol>
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
<?php $this->load->view('layout/bottom')?>