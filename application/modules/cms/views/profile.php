<div class="card">
        <div class="card-header">
            <h5 class="card-title">Hospital Profile</h5>
        </div>
        <div class="card-body">        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message');?>"></div> 
            <form id="profile-form" action="<?= $action; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Hospital Name</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">                                                     
                        <input id="hospital_name" class="form-control" name="hospital_name" type="text" value="<?= $about->hospital_name; ?>" > 
                        <input id="id" name="id" type="hidden" value="<?= $about->id; ?>" > 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Photo Header</label>
                    <div class="col-md-4 col-sm-4 col-xs-6 form-validation">
                        <input id="photo_header" class="form-control-file" name="photo_header" type="file" value="" > 
                        <small class="form-text text-muted">Recomended 450x450 px, max 1 MB</small>
                    </div>
                    <input type="text" name="oldImage" value="<?= $about->photo_header; ?>">
                    <?php
                    if($about->photo_header){
                        echo '<a href="#" data-toggle="modal" data-target="#showImage">View Photo</a> ';
                    }
                    ?>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">About</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">  
                        <textarea name="about" id="about" class="form-control" rows="10" cols="80">
                        <?= $about->about_id ;?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Mision</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">  
                        <textarea name="mission_id" id="mission_id" class="form-control" rows="5" cols="50">
                        <?= $about->mission_id ;?>
                        </textarea>                       
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Vision</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">    
                        <textarea name="vision_id" id="vision_id" class="form-control" rows="5" cols="50">
                        <?= $about->vision_id ;?>
                        </textarea>  
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Street</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">     
                        <textarea name="street" id="street" class="form-control" rows="5" cols="50">
                        <?= $about->street ;?>
                        </textarea>                         
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Email</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">                                                     
                        <input id="email" class="form-control" name="email" type="text" value="<?= $about->email; ?>" > 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Phone E-Care</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">                                                     
                        <input id="phone_ecare" class="form-control" name="phone_ecare" type="text" value="<?= $about->phone_ecare; ?>" > 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 font-weight-bold">Phone Registration</label>
                    <div class="col-md-10 col-sm-10 col-xs-12 form-validation">                                                     
                        <input id="phone_regis" class="form-control" name="phone_regis" type="text" value="<?= $about->phone_registration; ?>" > 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">  
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </form>
	    </div>
	</div>


<div class="modal fade" id="showImage" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body m-3 mx-auto">
                <img class="rounded"  src="<?= base_url().'assets/images/uploads/about/'.$about->photo_header ?>">
            </div>
        </div>
    </div>
</div>
<!-- END  modal -->
<script>
const flashDataProfile =  $('.flash-data').data('flashdata');
    if(flashDataProfile){
        Swal.fire({
                type: 'success',
                title: 'Data'+flashDataProfile,
                text: 'Klik OK untuk melanjutkan proses'
            })
    }
    
    CKEDITOR.replace( 'about');
CKEDITOR.replace( 'mission_id' );
CKEDITOR.replace( 'vision_id' );
CKEDITOR.replace( 'street' );

document.addEventListener("DOMContentLoaded", function(event) {
        // Initialize validation
        $('#profile-form').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'hospital_name': {
                    required: true,
                },
                'photo_header': {
                    extension: "png|jpe?g|", 
                    filesize: 2000
                },
                'about': {
                    required: true
                },
                'mission_id': {
                    required: true
                },
                'vision_id': {
                    required: true
                },
                'street': {
                    required: true
                },
                'email': {
                    required: true,
                    email: true
                },
                'phone_ecare': {
                    required: true,
                    minlength: 12,
                    maxlength: 15
                },
                'phone_regis': {
                    required: true,
                    maxlength: 15
                }
            },
            // Errors
            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).parents('.form-validation');
                // Do not duplicate errors
                if ($parent.find('.jquery-validation-error').length) {
                    return;
                }
                $parent.append(
                    error.addClass('jquery-validation-error small form-text invalid-feedback')
                );
            },
            highlight: function(element) {
                var $el = $(element);
                var $parent = $el.parents('.form-group');
                $el.addClass('is-invalid');
                // Select2 and Tagsinput
                if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
                    $el.parent().addClass('is-invalid');
                }
            },
            unhighlight: function(element) {
                $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            }
        });
    });
</script>