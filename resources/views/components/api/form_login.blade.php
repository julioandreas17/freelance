<div class="modal-header">
	<div class="position-relative w-100">
		<div class="row d-flex align-items-center">
			<div class="col">
				<div class="position-relative w-100">
					<div class="fs-5">Konfirmasi</div>
				</div>
			</div>
			<div class="col-auto">
				<div class="position-relative w-100">
                    <a role="button" class="text-danger text-decoration-none fs-3" data-bs-dismiss="modal">
                      <i class="bi bi-x-circle"></i>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal-body">
	<div class="position-relative w-100">
		<form method="POST" action="{!! url('api/login') !!}" class="form-login">
			<div class="fs-5 text-primary">
				Selamat Datang Kembali 🎉
			</div>
			<div>
				Silakan masuk untuk melanjutkan aktivitas Anda
			</div>
			<div class="position-relative w-100 mt-3">
				<div class="position-absolute start-0 top-0 bottom-0 m-auto bg-primary rounded-pill" style="width: 50px;height: 5px;"></div>
			</div>

			<div class="mt-5">
				<b class="text-danger">*</b> Email / Telp :
			</div>
			<div>
				<input type="text" name="username" class="form-control" required="" maxlength="255" placeholder="Ketik disini ...">
			</div>
			<div class="mt-3">
				<b class="text-danger">*</b> Password :
			</div>
			<div class="input-group">
				<input type="password" name="password" class="form-control" required="" maxlength="255" placeholder="Ketik disini ...">
				<button type="button" class="btn btn-primary btn-password" target="password">
					<i class="bi bi-eye-slash"></i>
				</button>
			</div>
			<div class="mt-3" align="center">
				<button type="submit" class="w-100 btn btn-primary rounded-pill">
					Lanjutkan <i class="bi bi-arrow-right"></i>
				</button>
			</div>
		</form>
	</div>
</div>