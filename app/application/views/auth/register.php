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
								<input type="text" class="form-control" id="nama">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="pass1">Password</label>
								<div class="d-flex flex-row mb-3">
									<input type="password" class="form-control mr-4" id="pass1"><br>
									<?= form_error('pass1', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
									<input type="password" class="form-control" id="pass2"><br>
									<?= form_error('pass1', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
								</div>
							</div>
							<center>
								<button type="submit" class="btn btn-appregis">Submit</button><br>
								Sudah punya akun?<a href="<?= base_url(''); ?>">Masuk disini</a>
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
	<a href="<?= base_url(''); ?>">Login here</a>