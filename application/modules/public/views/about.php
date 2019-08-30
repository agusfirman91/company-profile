<section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-holder">
                    <img src="<?= base_url()?>assets/images/welcome.jpg" alt="Awesome Image">    
                </div>
                <div class="inner-content">
                    <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-holder">
                    <div class="title">
                        <h1>Welcome to the Hospitals</h1>
                        <p><?= $about->about_id;?></p>    
                    </div>
                    <ul>
                        <li>
                            <div class="single-item">
                                <div class="iocn-box">
                                    <span class="flaticon-shapes"></span>
                                </div>
                                <div class="text-box">
									<h3>Our Mission</h3>
										<p><?= $about->mission_id;?></p>    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-item">
                                <div class="iocn-box">
                                    <span class="flaticon-technology-2"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Our Vision</h3>
									<p><?= $about->vision_id;?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="button">
                        <a class="thm-btn bgclr-1" href="<?= base_url().'fasilitas-layanan' ?>">Our Departments</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>    
</section>
