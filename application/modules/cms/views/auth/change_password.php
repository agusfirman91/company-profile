<div class="card">
	<div class="card-body">
		<h5 class="card-title">Password</h5>

            <!-- <div id="infoMessage">
                  <?php //echo $message;?>
            </div> -->
		<form action="<?= base_url()?>cms/change_password" method="POST">
			<div class="form-group">
                        <label for="old_password">Current password</label>
                        <?php echo form_input($old_password);?>
                        <small class="text-danger"><?= form_error('old'); ?></small>
			</div>
			<div class="form-group">
				<label for="inputPasswordNew">New password</label>
                        <?php echo form_input($new_password);?>
                        <small class="text-danger"><?= form_error('new'); ?></small>
			</div>
			<div class="form-group">
				<label for="inputPasswordNew2">Verify password</label>
	                  <?php echo form_input($new_password_confirm);?>
                        <small class="text-danger"><?= form_error('new_confirm'); ?></small>
                        <?php echo form_input($user_id);?>
			</div>
			<button type="submit" class="btn btn-primary">Save changes</button>
		</form>

	</div>
</div>