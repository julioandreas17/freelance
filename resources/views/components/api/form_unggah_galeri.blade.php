<div class="modal-header">
	<div class="position-relative w-100">
		<div class="row d-flex align-items-center">
			<div class="col">
				<div class="position-relative w-100">
					<div class="fs-5"><i class="bi bi-upload"></i> Unggah Galeri</div>
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
		<form method="POST" action="{!! url('api/unggah_galeri') !!}" class="form-unggah-galeri">
			<label for="galeri" role="button" class="d-block position-relative w-100">
				<div class="position-relative w-100 content" style="border-radius: 20px;border: 5px dashed #ecf0f1;">
					<div class="position-relative w-100 p-5" align="center">
						<i class="bi bi-upload fs-1" style="color: #ecf0f1;"></i>
					</div>
				</div>
			</label>
			<input type="file" name="galeri" id="galeri" class="form-control d-none" accept="image/*">
			<div class="mt-3" align="center">
				<button type="submit" class="w-100 btn btn-primary rounded-pill">
					Posting <i class="bi bi-arrow-right"></i>
				</button>
			</div>
		</form>
	</div>
</div>