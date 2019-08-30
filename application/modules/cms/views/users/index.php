<div id="infoMessage"><?php echo $message;?></div>

<div class="col-12 col-xl-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">List Users</h5>
			</div>
			<div class="card-body">
				<table  class="table table-striped" id="datatables-users">
					<thead>
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Email</td>
							<td>Group</td>
							<td>Status</td>
							<td>Action</td>					
						</tr>					
					</thead>
					<tbody>
					<?php foreach ($users as $user):?>
					<tr>
						<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
							<?php endforeach?>
						</td>
						<td>
						<?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
						<td class="table-action">
							<a href="<?= base_url().'cms/users/edit/'.$user->id;?>">
								<i class="align-middle" data-feather="edit-2"></i>
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
		<div class="card-footer">
			<a type="button" class="btn btn-primary" href="<?= base_url('cms/users/create-user')?>">
				Create New User
			</a>
			<a type="button" class="btn btn-success" href="<?= base_url('auth/create_group')?>">
				Create New Group
			</a>
		</div>
	</div>
	</div>	

<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-users').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-users_wrapper .col-md-6:eq(0)")
		});
</script>