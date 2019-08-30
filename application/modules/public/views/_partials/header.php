
<!--Start header area-->

<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <p><span class="fa fa-phone">
                    <!-- <p><span class="flaticon-phone"> -->

                    </span>24 hours emergency & ambulance Service: +6221 2991 0911 </p> 
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="https://bit.ly/2H4RBu4" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://bit.ly/2H5zJiu" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start header area--> 
<section class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?= base_url() ?>assets/images/logo.jpg" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header-right">
                    <ul>
                        <li>
                            <div class="icon-holder">
                                <!-- <i class="fa fa-facebook"></i> -->
                                <span class="fa fa-mobile"></span>
                                <!-- <span class="flaticon-technology"></span> -->
                            </div>
                            <div class="text-holder">
                                <h4>Call us now</h4>
                                <span> <?= $about->phone_ecare ?> </span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-map-marker"></span>
                                <!-- <span class="flaticon-pin"></span> -->
                            </div>
                            <div class="text-holder">
                                <h4><?= $about->hospital_name ?></h4>
                                <span>
                                <?php 
                                    $explode_data = explode(',',$about->street);
                                    echo $explode_data[0];
                                ?>
                                </span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="fa fa-calendar"></span>
                                <!-- <span class="flaticon-agenda"></span> -->
                            </div>
                            <div class="text-holder">
                                <h4>Senin - Minggu</h4>
                                <span>00.01 - 24.00 WIB</span>    
                            </div>
                        </li>        
                    </ul>
                    <div class="search-button pull-right">
                        <div class="toggle-search">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!--End header area-->  

<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->        
