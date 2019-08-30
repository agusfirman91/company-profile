
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?= base_url()?>images/resources/fact-counter-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Indikator Mutu</h1>
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
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="<?=base_url()?>indikator-mutu">Indikator Mutu</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Detail</li> 
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
  
<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane active" id="laboratory">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Indikator Mutu</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-box">
                                                <h3><?=$ims->indicator_name ?></h3>
                                            <div class="col-sm-12">
                                                <img src="<?= base_url().$ims->photo ?>" alt="Awesome Image">
                                            </div>
                                            </div>    
                                        </div>    
                                    </div>
                            </div>                           
                        </div>
                    </div>
                    <!--End tab box-->         
                </div>
            </div>
        </div>
    </div>
</section>  

<!--End service area-->
<style>
.bg-red{
    background-color:#ff0000;
    color:#ffffff;
}
.bg-yellow{
    background-color:#ffff00;
    color:#000000;
}
.bg-green{
    background-color:#00ff40;
    color:#000000;
}
</style>