
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?= base_url()?>images/resources/fact-counter-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1> Jadwal Dokter</h1>
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
                            <li><a href="<?= base_url()?>/home">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Jadwal Dokter</li>
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
 
<!--Start time table area-->
<div class="time-table-area">
    <div class="container">
        <div class="row pd-bottom">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                    <form action="<?= base_url();?>jadwal-dokter/search" method="post">
                        <select class="selectmenu" name="poliklinik">
                            <option selected="selected" >Select Department</option>
                            <?php foreach ($jadwal_dokter as $j_dokter) :?>
                                <option value="<?= $j_dokter->poliklinik ?>"><?= $j_dokter->poliklinik ?></option>
                            <?php endforeach;?>
                        </select>  
                    </div>
                    <div class="col-md-2">
                        <input class="thm-btn bgclr-1" type="submit" value="Search" />
                    </div>                    
                    </form>
                </div>    
            </div>
        </div>
        <?php if ($this->session->flashdata('sess_kategori')) { ?>
            <div class="alert alert-success"><b>Poliklinik :</b> <?= $this->session->flashdata('sess_kategori') ?> </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="time-table table datatables" >
                        <thead>
                            <tr>
                                <th>Dokter</th>
                                <th>Poliklinik</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jum'at</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($results as $j_prakter):?>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span><?= $j_prakter->nama_dokter?></span>
                                    </div>
                                </td>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span><?= $j_prakter->poliklinik?></span>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->senin?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->selasa?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->rabu?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->kamis?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->jumat?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->sabtu?></h6>
                                    </div>
                                </td>
                                <td class="single-box">
                                    <div class="inner-content text-center">
                                        <h6><?= $j_prakter->minggu?></h6>
                                    </div>
                                </td>
                            </tr>                            
                        <?php endforeach;?>
                        </tbody>
                    </table>

                    <!-- //pAGINATAION -->
                    <div class="row">
                       <div class="col-md-12">
                            <ul class="post-pagination text-center"> 
                                <!--Tampilkan pagination-->
                                <?php echo $pagination; ?>
                            </ul>
                        </div>
                    </div>
                        

                </div>
            </div>
        </div>
    </div>
</div>
<!--End time table area-->
