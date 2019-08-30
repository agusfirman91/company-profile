<div class="clearfix">
	<form class="form-inline float-right mt--1 d-none d-md-flex">
		<button class="btn btn-primary"><i class="align-middle" data-feather="plus"></i> New project</button>
	</form>
	<h1 class="h3 mb-3">Dashboard Task</h1>
</div>

<div class="row">
	<div class="col-lg-6 col-xl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-6">
					<div class="card flex-fill">
						<div class="card-header">
							<span class="badge badge-primary float-right">Today</span>
							<h5 class="card-title mb-0">Income</h5>
						</div>
						<div class="card-body my-2">
							<div class="row d-flex align-items-center mb-4">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0 font-weight-light">
										$24.300
									</h2>
								</div>
								<div class="col-4 text-right">
									<span class="text-muted">67%</span>
								</div>
							</div>

							<div class="progress progress-sm shadow-sm mb-1">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 67%"></div>
							</div>
						</div>
					</div>
					<div class="card flex-fill">
						<div class="card-header">
							<span class="badge badge-info float-right">Annual</span>
							<h5 class="card-title mb-0">Orders</h5>
						</div>
						<div class="card-body my-2">
							<div class="row d-flex align-items-center mb-4">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0 font-weight-light">
										2.562
									</h2>
								</div>
								<div class="col-4 text-right">
									<span class="text-muted">72%</span>
								</div>
							</div>

							<div class="progress progress-sm shadow-sm mb-1">
								<div class="progress-bar bg-info" role="progressbar" style="width: 72%"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card flex-fill">
						<div class="card-header">
							<span class="badge badge-warning float-right">Monthly</span>
							<h5 class="card-title mb-0">Activity</h5>
						</div>
						<div class="card-body my-2">
							<div class="row d-flex align-items-center mb-4">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0 font-weight-light">
										17.212
									</h2>
								</div>
								<div class="col-4 text-right">
									<span class="text-muted">46%</span>
								</div>
							</div>

							<div class="progress progress-sm shadow-sm mb-1">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 46%"></div>
							</div>
						</div>
					</div>
					<div class="card flex-fill">
						<div class="card-header">
							<span class="badge badge-success float-right">Annual</span>
							<h5 class="card-title mb-0">Revenue</h5>
						</div>
						<div class="card-body my-2">
							<div class="row d-flex align-items-center mb-4">
								<div class="col-8">
									<h2 class="d-flex align-items-center mb-0 font-weight-light">
										$18.700
									</h2>
								</div>
								<div class="col-4 text-right">
									<span class="text-muted">24%</span>
								</div>
							</div>

							<div class="progress progress-sm shadow-sm mb-1">
								<div class="progress-bar bg-success" role="progressbar" style="width: 24%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-xl-7">
		<div class="card">
			<div class="card-header">
				<div class="card-actions float-right">
					<div class="dropdown show">
						<a href="#" data-toggle="dropdown" data-display="static">
							<i class="align-middle" data-feather="more-horizontal"></i>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<h5 class="card-title mb-0">Current visitors</h5>
			</div>
			<div class="card-body p-2">
				<div id="world_map" style="height:305px;"></div>
			</div>
		</div>

		<script>
			document.addEventListener("DOMContentLoaded", function (event) {
				$('#world_map').vectorMap({
					map: "world_mill",
					normalizeFunction: "polynomial",
					hoverOpacity: .7,
					hoverColor: false,
					regionStyle: {
						initial: {
							fill: "#e3eaef"
						}
					},
					markerStyle: {
						initial: {
							"r": 9,
							"fill": "#47BAC1",
							"fill-opacity": .95,
							"stroke": "#fff",
							"stroke-width": 7,
							"stroke-opacity": .4
						},
						hover: {
							"stroke": "#fff",
							"fill-opacity": 1,
							"stroke-width": 1.5
						}
					},
					backgroundColor: "transparent",
					zoomOnScroll: false,
					markers: [{
							latLng: [31.230391, 121.473701],
							name: "Shanghai"
						},
						{
							latLng: [39.904202, 116.407394],
							name: "Beijing"
						},
						{
							latLng: [28.704060, 77.102493],
							name: "Delhi"
						},
						{
							latLng: [6.524379, 3.379206],
							name: "Lagos"
						},
						{
							latLng: [39.343357, 117.361649],
							name: "Tianjin"
						},
						{
							latLng: [24.860735, 67.001137],
							name: "Karachi"
						},
						{
							latLng: [41.008240, 28.978359],
							name: "Istanbul"
						},
						{
							latLng: [35.689487, 139.691711],
							name: "Tokyo"
						},
						{
							latLng: [23.129110, 113.264381],
							name: "Guangzhou"
						},
						{
							latLng: [19.075983, 72.877655],
							name: "Mumbai"
						},
						{
							latLng: [40.7127837, -74.0059413],
							name: "New York"
						},
						{
							latLng: [34.052235, -118.243683],
							name: "Los Angeles"
						},
						{
							latLng: [41.878113, -87.629799],
							name: "Chicago"
						},
						{
							latLng: [29.760427, -95.369804],
							name: "Houston"
						},
						{
							latLng: [33.448376, -112.074036],
							name: "Phoenix"
						},
						{
							latLng: [51.507351, -0.127758],
							name: "London"
						},
						{
							latLng: [48.856613, 2.352222],
							name: "Paris"
						},
						{
							latLng: [55.755825, 37.617298],
							name: "Moscow"
						},
						{
							latLng: [40.416775, -3.703790],
							name: "Madrid"
						}
					]
				});
			});

		</script>
	</div>

	<div class="col-md-6 col-xl-4 d-flex">
		<div class="w-100 flex-fill">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<div class="card-actions float-right">
						<div class="dropdown show">
							<a href="#" data-toggle="dropdown" data-display="static">
								<i class="align-middle" data-feather="more-horizontal"></i>
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<h5 class="card-title mb-0">Activity</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-4">
							<small>Visitors today</small>
							<h4 class="mb-0">6.502</h4>
						</div>
						<div class="col-4">
							<small>Earnings today</small>
							<h4 class="mb-0">$ 2.580</h4>
						</div>
						<div class="col-4">
							<small>Pending orders</small>
							<h4 class="mb-0">128</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="card flex-fill w-100">
				<div class="card-header">
					<div class="card-actions float-right">
						<div class="dropdown show">
							<a href="#" data-toggle="dropdown" data-display="static">
								<i class="align-middle" data-feather="more-horizontal"></i>
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<h5 class="card-title mb-0">Monthly Sales</h5>
				</div>
				<div class="card-body d-flex w-100">
					<div class="align-self-center chart chart-lg">
						<canvas id="chartjs-dashboard-bar"></canvas>
					</div>
				</div>
			</div>

			<script>
				document.addEventListener("DOMContentLoaded", function (event) {
					// Bar chart
					new Chart(document.getElementById("chartjs-dashboard-bar"), {
						type: 'bar',
						data: {
							labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
							datasets: [{
								label: "Last year",
								backgroundColor: "#47BAC1",
								borderColor: "#47BAC1",
								hoverBackgroundColor: "#47BAC1",
								hoverBorderColor: "#47BAC1",
								data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
							}, {
								label: "This year",
								backgroundColor: "#E8EAED",
								borderColor: "#E8EAED",
								hoverBackgroundColor: "#E8EAED",
								hoverBorderColor: "#E8EAED",
								data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
							}]
						},
						options: {
							maintainAspectRatio: false,
							legend: {
								display: false
							},
							scales: {
								yAxes: [{
									gridLines: {
										display: false
									},
									stacked: false,
									ticks: {
										stepSize: 20
									}
								}],
								xAxes: [{
									barPercentage: .75,
									categoryPercentage: .5,
									stacked: false,
									gridLines: {
										color: "transparent"
									}
								}]
							}
						}
					});
				});

			</script>
		</div>
	</div>

	<div class="col-md-6 col-xl-4 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-right">
					<div class="dropdown show">
						<a href="#" data-toggle="dropdown" data-display="static">
							<i class="align-middle" data-feather="more-horizontal"></i>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<h5 class="card-title mb-0">Daily feed</h5>
			</div>
			<div class="card-body h-100">
				<div class="media">
					<img src="img/avatar-5.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Ashley Briggs">
					<div class="media-body">
						<small class="float-right text-navy">5m ago</small>
						<strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong><br />
						<small class="text-muted">Today 7:51 pm</small><br />

					</div>
				</div>

				<hr />
				<div class="media">
					<img src="img/avatar.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Chris Wood">
					<div class="media-body">
						<small class="float-right text-navy">30m ago</small>
						<strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline<br />
						<small class="text-muted">Today 7:21 pm</small>

						<div class="border text-sm text-muted p-2 mt-1">
							Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
							sem...
						</div>
					</div>
				</div>

				<hr />
				<div class="media">
					<img src="img/avatar-4.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Stacie Hall">
					<div class="media-body">
						<small class="float-right text-navy">1h ago</small>
						<strong>Stacie Hall</strong> posted a new blog<br />

						<small class="text-muted">Today 6:35 pm</small>
					</div>
				</div>

				<hr />
				<div class="media">
					<img src="img/avatar-2.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Carl Jenkins">
					<div class="media-body">
						<small class="float-right text-navy">3h ago</small>
						<strong>Carl Jenkins</strong> posted two photos on <strong>Stacie Hall</strong>'s timeline<br />
						<small class="text-muted">Today 5:12 pm</small>

						<div class="row no-gutters mt-1">
							<div class="col-6 col-md-4 col-lg-4 col-xl-3">
								<img src="img/unsplash-1.jpg" class="img-fluid pr-2" alt="Unsplash">
							</div>
							<div class="col-6 col-md-4 col-lg-4 col-xl-3">
								<img src="img/unsplash-2.jpg" class="img-fluid pr-2" alt="Unsplash">
							</div>
						</div>
					</div>
				</div>

				<hr />
				<a href="#" class="btn btn-primary btn-block">Load more</a>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-xl-4 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-right">
					<div class="dropdown show">
						<a href="#" data-toggle="dropdown" data-display="static">
							<i class="align-middle" data-feather="more-horizontal"></i>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<h5 class="card-title mb-0">Appointments</h5>
			</div>
			<div class="p-4 bg-light">
				<h2>You have a meeting today!</h2>
				<p class="mb-0 text-sm">Your next meeting is in 2 hours. Check your <a href="#">schedule</a> to see the details.</p>
			</div>
			<div class="card-body">
				<ul class="timeline">
					<li class="timeline-item">
						<strong>Chat with Carl and Ashley</strong>
						<span class="float-right text-muted text-sm">30m ago</span>
						<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed
							aliquam ultrices mauris. Integer ante arcu...</p>
					</li>
					<li class="timeline-item">
						<strong>The big launch</strong>
						<span class="float-right text-muted text-sm">2h ago</span>
						<p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent
							adipiscing...</p>
					</li>
					<li class="timeline-item">
						<strong>Coffee break</strong>
						<span class="float-right text-muted text-sm">3h ago</span>
						<p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent
							congue erat at massa. Sed cursus turpis vitae
							tortor...</p>
					</li>
					<li class="timeline-item">
						<strong>Conference call with Stacie</strong>
						<span class="float-right text-muted text-sm">5h ago</span>
						<p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
							lacus...</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>
