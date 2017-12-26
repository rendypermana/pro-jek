<?php $this->load->view('layout/top')?>
	<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Kontak
                </h2>
            </div>
            <div class="col-md-9">
                <!-- Embedded Google Map -->
                <div class="ourmap" id="map"></div>
            </div>

            <div class="col-md-3">
                <h3>Detail Kontak</h3>
                <p>
                    <?=$alamat->value;?>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>:<?=$telpon->value;?></p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com"><?=$email->value;?></a>
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/Dewim-fashion-1660169040896663/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="http://instagram.com/dewimfashion" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>

        </div>

<?php $this->load->view('layout/bottom')?>