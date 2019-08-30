<div class="card">
	<div class="card-body">
		<h5 class="card-title">Create Group</h5>
		<form action="<?= base_url()?>cms/users/create_group" method="post" >
            <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="first_name">Group Name</label>
                    </div>
                    <div class="col-sm-4">
                        <?php echo form_input($group_name);?>
                        <small class="text-danger"><?= form_error('group_name'); ?></small>
                    </div>
		    </div>
            <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="first_name">Group Description</label>
                    </div>
                    <div class="col-sm-4">
                        <?php echo form_input($description);?>
                        <small class="text-danger"><?= form_error('description'); ?></small>
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