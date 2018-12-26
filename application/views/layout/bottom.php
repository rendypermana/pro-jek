     <!-- footer section start -->
    <footer class="re-footer-section">
      <!-- footer-top area start -->
      <div class="footer-top section-padding-top">
        <div class="footer-dsc">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="single-text res-text">
                  <div class="footer-title">
                    <h4>Contact us</h4>
                    <hr class="dubble-border"/>
                  </div>
                  <div class="footer-text">
                    <ul>
                      <li>
                        <?php $query = $this->db->where('id_setting', 2)->limit(1)->get('d_setting');
                          foreach ($query->result() as $row)
                          {
                            echo"<i class='pe-7s-map-marker'></i>";
                            echo"<p>$row->value</p>";                        }
                        ?>
                      </li>
                      <li>
                        <?php $query = $this->db->where('id_setting', 1)->limit(1)->get('d_setting');
                          foreach ($query->result() as $row)
                          {
                            echo"<i class='pe-7s-call'></i>";
                            echo"<p>$row->value</p>";                        }
                        ?>
                      </li>
                      <li>
                        <?php $query = $this->db->where('id_setting', 3)->limit(1)->get('d_setting');
                          foreach ($query->result() as $row)
                          {
                            echo"<i class='pe-7s-mail-open'></i>";
                            echo"<p>$row->value</p>";                        }
                        ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="single-text res-text">
                  <div class="footer-title">
                    <h4>my account</h4>
                    <hr class="dubble-border"/>
                  </div>
                  <div class="footer-menu">
                    <ul>
                      <li><a href="login.html">My Account</a></li>
                      <li><a href="wishlist.html">My Wishlist</a></li>
                      <li><a href="order-complete">My Orders</a></li>
                      <li><a href="#">My Credit slips</a></li>
                      <li class="nm"><a href="#">My Addresses</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3 margin-top">
                <div class="single-text res-text">
                  <div class="footer-title">
                    <h4>customer service</h4>
                    <hr class="dubble-border"/>
                  </div>
                  <div class="footer-menu">
                    <ul>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Brands</a></li>
                      <li><a href="#">Site Map</a></li>
                      <li class="nm"><a href="#">Gift Vouchers</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 hidden-sm col-md-3 margin-top">
                <div class="single-text res-text">
                  <div class="footer-title">
                    <h4>NEWSLETTER</h4>
                    <hr class="dubble-border"/>
                  </div>
                  <div class="footer-text">
                    <p>Lorem ipsum dolor sit amet, consectetures do adipisicing elit, sed do eiusmod tempores incididunt ut labore</p>
                    <form action="mail.php" method="post">
                      <input type="text" name="email" placeholder="Enter your mail" />
                      <input type="submit" value="submit" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="dubble-border"/>
        </div>
        <div class="social-media">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="paypal social-icon">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="social-icon">
                  <ul class="floatright">
                    <li class="res-mar"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-top area end -->
      <!-- footer-bottom area start -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center">
              <p>&copy; 2018 Efloria. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom area end -->
    </footer>
        <!-- footer section end -->
        
    <!-- all js here -->
    <!-- jquery latest version -->
        <script src="<?php echo base_url() ?>public/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
        <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
        <!-- parallax js -->
        <script src="<?php echo base_url() ?>public/js/parallax.min.js"></script>
    <!-- owl.carousel js -->
        <script src="<?php echo base_url() ?>public/js/owl.carousel.min.js"></script>
        <!-- Img Zoom js -->
    <script src="<?php echo base_url() ?>public/js/img-zoom/jquery.simpleLens.min.js"></script>
    <!-- meanmenu js -->
        <script src="<?php echo base_url() ?>public/js/jquery.meanmenu.js"></script>
    <!-- jquery.countdown js -->
        <script src="<?php echo base_url() ?>public/js/jquery.countdown.min.js"></script>
    <!-- Nivo slider js
    ============================================ -->    
    <script src="<?php echo base_url() ?>public/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/lib/home.js" type="text/javascript"></script>
    <!-- jquery-ui js -->
        <script src="<?php echo base_url() ?>public/js/jquery-ui.min.js"></script>
    <!-- sticky js -->
        <script src="<?php echo base_url() ?>public/js/sticky.js"></script>
    <!-- plugins js -->
        <script src="<?php echo base_url() ?>public/js/plugins.js"></script>
    <!-- main js -->
        <script src="<?php echo base_url() ?>public/js/main.js"></script>
    </body>
</html>
