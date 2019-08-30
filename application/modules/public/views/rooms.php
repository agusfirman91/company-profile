<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?= base_url()?>assets/images/resources/fact-counter-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Rawat Inap</h1>
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
                            <li class="active">Rawat Inap</li>
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


<!--Start departments single area-->
<section id="departments-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">  
                <div class="tab-box">
                    <div class="tab-content">
                    
                    <?php for ($i = 1; $i <= 5; $i++) { 
                     ?>
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds<?=$i?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?= base_url().'assets/images/uploads/rooms/'.$ranap['photo'.($i)];?>" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->                        
                    <?php }?>
                    </div>
                    <style>
                    .img-holder{
                        width:160px
                    }
                    </style>
                    <ul class="nav nav-tabs tab-menu doctor-photos">
                    
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <li class="">
                            <a href="#ds<?=$i?>" data-toggle="tab">
                                <div class="img-holder">
                                <img src="<?= base_url().'assets/images/uploads/rooms/'.$ranap['photo'.($i)];?>" alt="Awesome Image" >
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                                      
                    <?php }?>
                    </ul>
                </div>

                <div class="departments-sidebar">
                     <!--Start single sidebar-->
                     <div class="single-sidebar">
                        <div class="title">
                            <h3 class="pull-right">Rp. <?= number_format($ranap['price']) ?></h3>    
                        </div>
                        <div class="text-box">
                            <p><?= $ranap['description'] ?></p>
                        </div> 
                    </div> 
                    </div> 
                    <!--Ens single sidebar--> 

                
                
            </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="departments-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Ranap Inap</h3>    
                        </div>
                        <ul class="all-departments ranap">
                        
                        <?php foreach ($ranaps as $ranap):?>
                            <li>
                                <a href="<?= base_url().'room/'.$ranap->link; ?>"><?= $ranap->name_room; ?></a>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                 
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 

 
<script>
$( document ).ready(function() {
    // var url = window.location;
    var main_route = (window.location.pathname.split("/")[1]);
    window.onload = function(){
        // $("ul.ranap li").eq(0).addClass("active");
        $("#tab-menu-ranap li:first-child a").trigger('click');
        $("ul.doctor-photos li:first-child a").trigger('click');
    }
  });


</script>
