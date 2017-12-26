        <hr>

        <a id="back-to-top" href="#" class="btn btn-join btn-md back-to-top" role="button" title="Click kembali ke atas" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright brand-foot">
                        <p>Copyright &copy; Dewim Fashion 2017</p>
                    </div>
                    <div class="page-foot other-foot">
                        <ul>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>resource/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>resource/js/bootstrap.min.js"></script>

    <!-- Wow Script -->
    <script src="<?php echo base_url() ?>resource/js/wow.min.js"></script>
    <!-- Custom Script -->
    <script src="<?php echo base_url() ?>resource/js/custom.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjAzEbTVmnfuP9RxjpdZ4-RUpPLoZIMD0&callback=initMap"
  type="text/javascript"></script>
    <script type="text/javascript">
        // menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.973061, 108.492388);
 
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 15,
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Dewim Fashion",
                   animation:google.maps.Animation.BOUNCE,
                   icon:"<?php echo base_url() ?>resource/images/marker.png"
              });
    </script>
   
</body>

</html>
