<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>Indikator Mutu</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                    <!--Start single item-->
                    <?php foreach ($ims as $im): ?>
                    <div class="single-item text-center">
                        <div class="text-holder">
                            <p><?= $im->indicator_name ?></p>
                        </div>
                        <a class="readmore" href="<?= base_url().'indikator-mutu/detail/'. $im->id; ?>">Read More</a>
                    </div>
                    <!--End single item-->
                    <?php endforeach;?>
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
  