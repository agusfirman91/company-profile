<div class="col-12 col-xl-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">List Messages</h5>
			</div>
			<div class="card-body">
				<table  class="table table-striped" id="datatables-users">
					<thead>
						<tr>
							<td>Subject</td>
							<td>Name</td>
							<td>Email</td>
							<td>Phone</td>
							<td>Message</td>
							<td>Action</td>					
						</tr>					
					</thead>
					<tbody>
					<?php foreach ($contactMessage as $cM):?>
					<tr>
						<td><?= $cM->subject ;?></td>
						<td><?= $cM->name ;?></td>
						<td><?= $cM->email ;?></td>
						<td><?= $cM->phone ;?></td>
						<td><?= $cM->messages ;?></td>
						<td>
							<a href="<?= base_url().'cms/cMs/edit/'.$cM->id;?>">
								<i class="align-middle" data-feather="send"></i>
							</a>
							<a href="<?= base_url().'cms/cMs/edit/'.$cM->id;?>">
								<i class="align-middle" data-feather="delete"></i>
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
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