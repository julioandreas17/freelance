<div class="kontak position-relative w-100 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="position-relative w-100 p-2">
					<div class="text-primary fs-1" align="center">
						Butuh Bantuan?
					</div>
					<div class="fs-5" align="center">
						Kami siap memberikan solusi untuk Anda
					</div>
					<div class="position-relative mt-4 w-100">
						<div class="position-absolute start-0 end-0 top-0 bottom-0 bg-primary m-auto rounded-pill" style="height: 5px;width: 50px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="position-relative w-100 mt-4">
		<div class="position-absolute start-0 end-0 top-0 bottom-0 overflow-hidden d-none d-sm-none d-md-block d-lg-block d-xl-block">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089095052511!2d106.83283689999999!3d-6.2519908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30043690f0d%3A0x4a0c37b064b95099!2sPT%20SELARAS%20ENERGI%20ELEKTRIKAL!5e0!3m2!1sen!2sid!4v1765763611226!5m2!1sen!2sid" style="border: 0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="position-relative w-100 d-block d-sm-block d-md-none d-lg-none d-xl-none" style="height: 300px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089095052511!2d106.83283689999999!3d-6.2519908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30043690f0d%3A0x4a0c37b064b95099!2sPT%20SELARAS%20ENERGI%20ELEKTRIKAL!5e0!3m2!1sen!2sid!4v1765764304094!5m2!1sen!2sid" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="position-relative w-100">
			<div class="row d-flex justify-content-end">
				<div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
					
					<div class="position-relative w-100 p-3">
						<div class="position-relative w-100 p-3 bg-white shadow-sm" style="border-radius: 20px;">
							
							<div class="row d-flex align-items-center">
								<div class="col-auto">
									<div class="position-relative p-2">
										<i class="bi bi-phone text-primary fs-2"></i>
									</div>
								</div>
								<div class="col">
									<div class="position-relative p-2">
										<a href="https://wa.me/{!! str_replace(array('+', ' '), array('', ''), env('PHONE')) !!}" target="_blank" class="text-decoration-none" style="color: unset;">
											{{ env('PHONE') }}
										</a>
									</div>
								</div>
							</div>

							<div class="row d-flex align-items-center mt-3">
								<div class="col-auto">
									<div class="position-relative p-2">
										<i class="bi bi-envelope-at text-primary fs-2"></i>
									</div>
								</div>
								<div class="col">
									<div class="position-relative p-2">
										<a href="mailto://{{ env('EMAIL') }}" target="_blank" class="text-decoration-none" style="color: unset;">
											{{ env('EMAIL') }}
										</a>
									</div>
								</div>
							</div>

							<div class="row d-flex align-items-start mt-3">
								<div class="col-auto">
									<div class="position-relative p-2">
										<i class="bi bi-map text-primary fs-2"></i>
									</div>
								</div>
								<div class="col">
									<div class="position-relative p-2">
										<a href="{{ env('MAP_LINK') }}" target="_blank" class="text-decoration-none" style="color: unset;">
											{{ env('MAP') }}
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="position-relative w-100 py-3 bg-dark">
	<div class="container">
		<div class="text-white" align="center">
			&copy; {!! date('Y') !!} Selaras Hypnotherapy & Human Development Center. All rights reserved.
		</div>
	</div>
</div>