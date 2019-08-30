
<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title">
            <h1>Get Touch With Us</h1>
            <span class="border"></span>
            <div class="select-box pull-right">
                <select class="text-capitalize selectpicker form-control required" name="form_subject" data-style="g-select" data-width="100%">
                    <option>Newyork Campus</option>
                    <option>Canada Campus</option>
                    <option>UK Campus</option>
                    <option>USA Campus</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                <?php echo $script_captcha; // javascript recaptcha <?= $this->session->flashdata('success'); ?>
                    <form id="" name="contact_form" class="default-form" action="<?= $action; ?>" method="post">
                        <h2>Hubungi Kami</h2>    
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message');?>"></div>              
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" value="" placeholder="Your Name*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" value="" placeholder="Your Mail*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="messages" placeholder="Your Message.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <?php echo $captcha // tampilkan recaptcha ?>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12 ">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bgclr-1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="quick-contact">
                    <div class="title">
                        <h2>Quick Contact</h2>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Address:</span>
                                <p>
                                <?=$contact->street?>
                                </p></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Phone:</span>
                                <p>
                                <?=$contact->phone_registration?>
                                </p></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Email:</span>
                                <p>
                                <?=$contact->email?></p></h5>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End contact form area-->  

<script>
    const flashData =  $('.flash-data').data('flashdata');
    if(flashData){
    Swal.fire({
        type: 'success',
        title: 'Data' + flashData,
        text: 'Klik OK untuk melanjutkan proses'
    })
}
</script>