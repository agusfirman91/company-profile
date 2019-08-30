<div class="card">
	<div class="card-body">
		<h5 class="card-title">Edit User</h5>
        <?php echo form_open(uri_string());?>
        <div class="form-group row">
                <div class="col-sm-4">
                        <label for="first_name">First Name</label>
                </div>
                <div class="col-sm-4">
                        <?php echo form_input($first_name);?>
                        <small class="text-danger"><?= form_error('first_name'); ?></small>
                </div>
        </div>
        <div class="form-group row">
                <div class="col-sm-4">
                        <label for="last_name">Last Name</label>
                </div>
                <div class="col-sm-4">
                        <?php echo form_input($last_name);?>
                        <small class="text-danger"><?= form_error('last_name'); ?></small>
                </div>
        </div>
        <div class="form-group row">
                <div class="col-sm-4">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-sm-4">
                    <?php echo form_input($phone);?>
                    <small class="text-danger"><?= form_error('phone'); ?></small>
                </div>
        </div>
        <div class="form-group row">
                <div class="col-sm-4">
                    <label for="password">Password (if changing password) </label>
                </div>
                <div class="col-sm-4">
                    <?php echo form_input($password);?>
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
        </div>
        <div class="form-group row">
                <div class="col-sm-4">
                    <label for="password">Password Confirm (if changing password) </label>
                </div>
                <div class="col-sm-4">
                    <?php echo form_input($password_confirm);?>
                    <small class="text-danger"><?= form_error('password_confirm'); ?></small>
                </div>
        </div>
        <?php if ($this->ion_auth->is_admin()): ?>
        <div class="form-group row">
            <div class="col-sm-4">
                <?php echo lang('edit_user_groups_heading');?>
            </div>
            <div class="col-sm-4">
            <?php foreach ($groups as $group):?>
                    <label class="checkbox">
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                    </label>
                    <?php endforeach?>
                <?php endif ?>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-4">
                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary" name="submit">Save Chage</button>   
                </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>


