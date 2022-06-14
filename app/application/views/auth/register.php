<div class="container bg-appbg py-5">
	<div class="container bg-appbg py-4"></div>
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
								</div>
								<form method="post" action="<?= base_url('auth/register/'); ?>">
									<div class="form-group px-4 mx-4">
										<label for="nama">Nama</label>
										<input type="text" name="name" class="form-control" id="nama">
										<div class="form-group">
											<small class="text-danger"><?= form_error('name', '<p> ', '</p>'); ?></small>
										</div>
									</div>

									<div class="form-group px-4 mx-4">
										<label for="email">Email</label>
										<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
										<div class="form-group">
											<small class="text-danger"><?= form_error('email', '<p> ', '</p>'); ?></small>
										</div>
									</div>

									<div class="form-group px-4 mx-4">
										<label for="pass1">Password</label>
										<div class="d-flex flex-row">
											<input type="password" name="pass1" class="form-control mr-4" id="pass1">
											<input type="password" name="pass2" class="form-control" id="pass2">
										</div>
										<div class="form-group">
											<small class="text-danger"><?= form_error('pass1', '<p> ', '</p>'); ?></small>
										</div>
									</div>

									<div class="text-center">
										<div class="row py-3">
											<div class="col-12">
												<button type="submit" class="btn btn-appregis text-light px-5 py-2">Daftar</button>
											</div>
										</div>
										<div class="row align-items-center">
											<div class="col-6 text-end">Sudah punya akun?</div>
											<div class="col-6 text-start">
												<a class="btn btn-white" href="<?= base_url(''); ?>"> Masuk disini</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>