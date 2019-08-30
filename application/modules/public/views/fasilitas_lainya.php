
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?= base_url()?>images/resources/fact-counter-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Fasilitas Lainya</h1>
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
                            <li><a href="<?= base_url().'fasilitas-layanan'?>">Fasilitas dan Layanan</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Fasilitas Lainya</li>
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
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">  
                
                <div class="text-box sec-title">
                    <h3>
                        <?php
                            if(!empty($facilities->name_id)){$name_id =  $facilities->name_id;
                            }else{$name_id =  $_fasilitas_lainya->name_other_facility; }
                            echo $name_id;
                        ?>
                    </h3>
                    <span class="border"></span>
                    <p>
                    <?php
                      if(!empty($facilities->description_id)){$description=$facilities->description_id;
                      }else{$description =  $_fasilitas_lainya->description;}
                      echo $description;
                    ?>
                    </p>
                </div> 
                
            </div> 
            
            <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="departments-sidebar">

                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Fasilitas Lainya</h3>    
                        </div>
                        <ul class="all-departments">
                        <?php foreach ($fasilitas_lainya as $f_lainya):?>
                            <li class="">
                                <a href="<?= base_url().'fasilitas-layanan/fasilitas-lainya/'.$f_lainya->id_other_facility;?>">
                                <?= $f_lainya->name_other_facility; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                      
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
