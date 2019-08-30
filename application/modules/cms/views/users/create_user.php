<div class="card">
        <div class="card-header">
                <h5 class="card-title">Create Users</h5>
        </div>
        <div class="card-body">
		<form action="<?= base_url()?>cms/users/create_user" method="POST" >
                        <div class="form-group row">
                                <div class="col-sm-2">
                                        <label for="first_name">First Name</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($first_name);?>
                                        <small class="text-danger"><?= form_error('first_name'); ?></small>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-2">
                                        <label for="last_name">Last Name</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($last_name);?>
                                        <small class="text-danger"><?= form_error('last_name'); ?></small>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-2">
                                        <label for="email">Email</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($email);?>
                                        <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
			</div>
			<div class="form-group row">
                                <div class="col-sm-2">
                                                <label for="phone">Phone</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($phone);?>
                                        <small class="text-danger"><?= form_error('phone'); ?></small>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-2">
                                                <label for="password">Password</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($password);?>
                                        <small class="text-danger"><?= form_error('password'); ?></small>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-2">                
                                        <label for="password_confirm">Password Confirm</label>
                                </div>
                                <div class="col-sm-4">
                                        <?php echo form_input($password_confirm);?>
                                        <small class="text-danger"><?= form_error('password_confirm'); ?></small>
                                </div>
			</div>
                        <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary">Save</button>   
                                </div>
                        </div>
		</form>
	</div>
</div>
