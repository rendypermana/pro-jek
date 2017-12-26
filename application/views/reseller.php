<?php $this->load->view('layout/top')?>
	<header class="header-image">
        <div class="layer">
            <div class="headline">
                <div class="container">
                    <h1 class="wow bounceInDown">Mau Jualan Online Tapi Belum Punya Produk?</h1>
                    <h2 class="wow bounceInLeft">Dewim Fashion menyediakan beraneka macam produk untuk kebutuhan reseller dan dropship</h2>
                </div>
            </div>
        </div>
    </header>
<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="reseller-header">
                    Kenapa anda harus bergabung dengan Dewim Fashion?
                </h2>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="keuntungan wow flipInY">
                    <div class="image-service text-center">
                        <img src="<?php echo base_url() ?>resource/images/praktis.png" class="img-hover">
                    </div>
                    <h3>Praktis</h3>
                    <p>Anda bisa berjualan online tanpa harus memiliki stok di tempat Anda. Kami juga dapat mengirimkan pesanan customer Anda secara langsung, tanpa Anda repot mengepak dan mengirimnya sendiri</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="keuntungan wow flipInY">
                    <div class="image-service text-center">
                        <img src="<?php echo base_url() ?>resource/images/lengkap.png" class="img-hover">
                    </div>
                    <h3>Murah & Lengkap</h3>
                    <p>Kami menyediakan berbagai macam barang dengan harga murah dengan kualitas baik sehingga tidak akan mengecewakan konsumen </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="keuntungan wow flipInY">
                    <div class="image-service text-center">
                        <img src="<?php echo base_url() ?>resource/images/untung.png" class="img-hover">
                    </div>
                    <h3>Keuntungan Besar</h3>
                    <p>Anda akan dapatkan keuntungan hingga 20-50% dari harga produk karena kami memberikan harga reseller yang sangat menarik </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="keuntungan wow flipInY">
                    <div class="image-service text-center">
                        <img src="<?php echo base_url() ?>resource/images/jempol.png" class="img-hover">
                    </div>
                    <h3>Tip & Trik Berjualan</h3>
                    <p>Join Dewim Fashion sekarang juga, dan Anda akan dapatkan materi edukasi untuk meningkatkan penjualan Anda. Mengubah toko online Anda menjadi bisnis berskala besar</p>
                </div>
            </div>

            <div class="col-lg-12">
                <h2 class="reseller-join">
                        Reseller Kami
                </h2>
            </div>

            <div class="col-lg-12">
                <div class="reseller-area">
                    <div class="row">
                        <div class="col-lg-6 wow slideInLeft">
                            <h3 class="reseller-login">Reseller Login</h3>
                            <?=form_open('page_reseller/reseller_login')?>
                            <?=$this->session->flashdata('error')?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Masuk" class="btn btn-join">
                            <?php echo form_close();?>
                        </div>
                        <div class="col-lg-6 wow slideInRight">
                            <h3 class="reseller-login">Ingin Jadi Reseller?</h3>
                            <div class="well">
                                <p>Silahkan mendaftar menjadi reseller kami dengan klik tombol dibawah ini</p>
                                <a href="<?php echo base_url() ?>index.php/page_reseller/daftar " style="text-decoration: none;"><button class="btn btn-join btn-block btn-lg">Join Reseller</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
<?php $this->load->view('layout/bottom')?>