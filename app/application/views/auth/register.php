<div class="container-fluid py-5 bg-appbg">
	<div class="row">
		<div class="col-6 offset-3 bg-light">
			<div class="col-md-6 offset-3 my-5">
				<div class="panel panel-default">
					<div class="panel-head">
						<center>
							<h1>Buat Akun</h1>
						</center>
					</div>
					<div class="panel-body">
						<form class="my-5" method="post" action="<?= base_url('auth/register/'); ?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="name" class="form-control" id="nama">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="pass1">Password</label>
								<div class="d-flex flex-row">
									<input type="password" name="pass1" class="form-control mr-4" id="pass1">
									<input type="password" name="pass2" class="form-control" id="pass2">
								</div>
								<?= form_error('pass1', '<small class="text-danger pl-3"> ', '</small>'); ?>
							</div>
							<center>
								<button type="submit" class="btn btn-appregis">Submit</button><br>
								Sudah punya akun?<a class="btn btn-white" href="<?= base_url(''); ?>"> Masuk disini</a>
							</center>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>



<form method="post" action="<?= base_url('auth/register/'); ?>">
	<h1>Create Account</h1>
	<input type="text" name="name" placeholder="Name"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="pass1" placeholder="Password">
	<?= form_error('pass1', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
	<input type="password" name="pass2" placeholder="Confirm Password">
	<?= form_error('pass2', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
	<button type="submit">Register</button><br>
	<a href=">Login here</a>