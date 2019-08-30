<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?= base_url()?>images/resources/fact-counter-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Fasilitas dan Layanan</h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Fasilitas dan Layanan</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>Fasilitas dan Layanan</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                    <!--Start single item-->
                    <?php foreach ($facilities as $facility): ?>
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="<?= $facility->fa_icon; ?>"></span>    
                        </div>
                        <div class="text-holder">
                            <h3><?= $facility->name_id;?></h3>
                            <p>How all this mistaken al idea of denouncing pleasure praisings pain was complete.</p>
                        </div>
                        <a class="readmore" href="<?= base_url('fasilitas-layanan/').$facility->link; ?>">Read More</a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 