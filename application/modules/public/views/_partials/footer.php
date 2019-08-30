<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>About Hospitals</h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                        <p>The relentless service of Hospitals in the past 25 years taken health care to the most modern levels in the region catering to urban & rural.</p>
                        <p class="mar-top">A Health Care Provider of Western Approach, Hospitals is the most trusted multispecialty hospital.</p>
                        <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>Usefull Links</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links fl-lft">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Consultants</a></li>
                        <li><a href="#">Working Hours</a></li>
                        <li><a href="#">Procedures</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">FAQ’s</a></li>
                    </ul>
                    <ul class="usefull-links">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Healthy Foods</a></li>
                        <li><a href="#">Appointments</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Certificates</a></li>
                        <li><a href="#">Qualifications</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>HUBUNGI KAMI</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-map-marker"></span>
                                <!-- <span class="flaticon-pin"></span> -->
                            </div>
                            <div class="text-holder">
                                <h5>RS Grha Kedoya</h5>
                                <p>Jalan Panjang Arteri No.26, RT.15/RW.7, Kedoya Utara, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-envelope-o"></span>
                                <!-- <span class="flaticon-interface"></span> -->
                            </div>
                            <div class="text-holder">
                                <h5>info@grhakedoya.com</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->        
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>PENDAFTARAN POLIKLINIK </h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-phone"></span>
                                <!-- <span class="flaticon-technology-1"></span> -->
                            </div>
                            <div class="text-holder">
                                <h5>+6221 2991 0900</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                    <br/>
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>EMERGENCY CARE  </h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-phone"></span>
                                <!-- <span class="flaticon-technology-1"></span> -->
                            </div>
                            <div class="text-holder">
                                <h5> +6221 2991 0911 </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
        
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright-text">
                    <p>Copyrights © 2019 All Rights Reserved, Powered by <a href="#">IT Grha Kedoya.</a></p> 
                </div>
            </div>
            <div class="col-md-4">
                <ul class="footer-social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-caret-up"></span>
    <!-- <span class="flaticon-triangle-inside-circle"></span> -->
</div>

<!-- <script src="assets/js/flashMessage.js"></script> -->
<!-- main jQuery -->\
  <script>
$( document ).ready(function() {
    var url = window.location;
        $('ul li a[href="'+ url +'"]').parent().addClass('active');
        $('ul li a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.1/jquery.priceformat.js"></script>
  
<!-- Wow Script -->
<script src="<?= base_url()?>assets/js/wow.js"></script>
<!-- bootstrap -->
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?= base_url()?>assets/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?= base_url()?>assets/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?= base_url()?>assets/js/validation.js"></script>
<!-- mixit up -->
<script src="<?= base_url()?>assets/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?= base_url()?>assets/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcEfP7FS_8H3ktWxyJ8XSEs7QGbTPkz3g"></script> -->
<!--gmap script-->
<!-- <script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script> -->
<!-- fancy box -->
<script src="<?= base_url()?>assets/js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url()?>assets/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?= base_url()?>assets/js/isotope.js"></script>
<script src="<?= base_url()?>assets/js/jquery.prettyPhoto.js"></script> 
<script src="<?= base_url()?>assets/js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="<?= base_url()?>assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?= base_url()?>assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="<?= base_url()?>assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?= base_url()?>assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="<?= base_url()?>assets/html5lightbox/html5lightbox.js"></script>


<!-- revolution slider js -->
<script src="<?= base_url()?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url()?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


<!-- thm custom script -->
<script src="<?= base_url()?>assets/js/custom.js"></script>

</body>
</html>