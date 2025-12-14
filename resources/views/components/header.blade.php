<div class="header position-relative w-100 py-5">
    <div class="position-absolute start-0 end-0 top-0 bottom-0" style="background: url({!! url('public/assets/images/header.png') !!});background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
    <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-white" style="opacity: 0.8;"></div>
    @include('components.navbar')
    <div class="position-relative w-100 py-5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="position-relative w-100 d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <div class="fs-3 fw-bold text-primary">
                            {{ strtoupper(env('DESCRIPTION')) }}
                        </div>
                        <div class="fs-5 mt-3 text-primary">
                            Selaras Hypnotherapy & Human Development Center
                        </div>
                        <div class="text-primary mt-1">
                            Pulih dan Bertumbuh Bersama by SEE Group (ESQ)
                        </div>
                    </div>

                    <div class="position-relative w-100 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                        <div class="fs-1 fw-bold text-primary">
                            {{ strtoupper(env('DESCRIPTION')) }}
                        </div>
                        <div class="fs-4 mt-3 text-primary">
                            Selaras Hypnotherapy & Human Development Center
                        </div>
                        <div class="text-primary mt-1">
                            Pulih dan Bertumbuh Bersama by SEE Group (ESQ)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative w-100">
            <div class="fs-1">&nbsp;</div>
        </div>
    </div>
    <div class="position-absolute start-0 end-0 bottom-0" style="background: #ecf0f1;box-shadow: 0px -5px 50px 100px #ecf0f1;">
        <div class="fs-5">&nbsp;</div>
    </div>
</div>