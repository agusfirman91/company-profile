<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png">
	<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/favicon/rsgk_icon.png" sizes="16x16">


	<title>LOGIN SIMRS</title>

	<link href="<?= base_url('assets/backend/css/app.css'); ?>" rel="stylesheet">

</head>
<body>
	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back, CMS RS Grha Kedoya</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
                  <?php
                    if($this->session->flashdata('sukses')){
                      echo '<div class="alert alert-success alert-dismissible" role="alert">
                          <div class="alert-message">
                            <strong>Sukses!
                          </div>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                    }
                  ?>
									<form action="<?= base_url('cms/login');?>" method="post">
										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="identity" placeholder="Enter your username" />
											<?= form_error('identity'); ?>
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<?= form_error('password'); ?>
										</div>
										<div>
											<div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked>
												<label class="custom-control-label text-small">Remember me next time</label>
											</div>
										</div>
										<div class="text-center mt-3">                                     
											<button type="submit" class="btn btn-lg btn-primary">Log in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?= base_url('assets/backend/js/app.js')?>"></script>

</body>

</html>
