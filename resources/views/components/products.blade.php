@php
  $products = array();
  $products[] = array(
    'category' => 'Excellent Product',
    'title' => 'GAS INSULATED',
    'subtitle' => 'SWITCHGEAR',
    'image' => url('public/images/exc_01.png'),
  );
  $products[] = array(
    'category' => 'Excellent Product',
    'title' => 'AIR INSULATED',
    'subtitle' => 'SWITCHGEAR',
    'image' => url('public/images/exc_02.png'),
  );
  $products[] = array(
    'category' => 'Excellent Product',
    'title' => 'METALCLAD',
    'subtitle' => 'KYN-12/24',
    'image' => url('public/images/exc_03.png'),
  );

  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'HY-0080P-E',
    'subtitle' => 'Cold Mirror Dew Point Meter',
    'image' => url('public/images/eq_01.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'KEW3125A',
    'subtitle' => 'High Voltage Insulation Resistence Tester',
    'image' => url('public/images/eq_02.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'XP-1A',
    'subtitle' => 'SF6 Gas Leak Detector',
    'image' => url('public/images/eq_03.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'MS2520CN',
    'subtitle' => 'Grounding Resistence Tester',
    'image' => url('public/images/eq_04.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'PW3361I (ZD461)',
    'subtitle' => 'Relay Protection Tester',
    'image' => url('public/images/eq_05.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'SWT-VB',
    'subtitle' => 'Switch Mechanical Characteristic Tester',
    'image' => url('public/images/eq_06.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'YXY-A200',
    'subtitle' => 'Power Frequncy Withstand Voltage Test System',
    'image' => url('public/images/eq_07.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'YXY-A302',
    'subtitle' => 'Power Frequncy Withstand Voltage & Partial Discharge Test System',
    'image' => url('public/images/eq_08.png'),
  );
  $products[] = array(
    'category' => 'Equipment List',
    'title' => 'MS2671BN-I',
    'subtitle' => 'Voltage Endurance Tester',
    'image' => url('public/images/eq_09.png'),
  );
@endphp

<div class="products position-relative w-100 py-5">
  <div class="container">
    <div class="position-relative w-100">
      <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
      <div class="fs-2 position-relative pb-3" align="center">
        Our Products
      </div>
    </div>
    
    <div class="position-relative w-100 mt-5">
      <div class="position-relative w-100">
        <div class="row d-flex justify-content-center">
          <div class="col-auto col-sm-auto col-md-12 col-lg-4 col-xl-4">

            <div class="position-relative w-100">
              <div class="row d-flex justify-content-center">
                <div class="col-auto col-sm-auto col-md-auto col-lg-12 col-xl-12">
                  <div class="position-relative w-100 p-2">
                    <div class="bg-white w-100 p-3 text-primary" role="button" style="border-radius: 15px;" action="all">
                      All Products
                    </div>
                  </div>
                </div>

                <div class="col-auto col-sm-auto col-md-auto col-lg-12 col-xl-12">
                  <div class="position-relative w-100 p-2">
                    <div class="w-100 p-3 text-primary" role="button" style="border-radius: 15px;" action="Excellent Product">
                      Excellent Products
                    </div>
                  </div>
                </div>

                <div class="col-auto col-sm-auto col-md-auto col-lg-12 col-xl-12">
                  <div class="position-relative w-100 p-2">
                    <div class="w-100 p-3 text-primary" role="button" style="border-radius: 15px;" action="Equipment List">
                      Equipment List
                    </div>
                  </div>
                </div>

                <div class="col-auto col-sm-auto col-md-auto col-lg-12 col-xl-12">
                  <div class="position-relative w-100 p-2">
                    <div class="w-100 p-3 text-primary get-more" role="button" style="border-radius: 15px;" action="">
                      Get More Products
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
            
            <div class="position-relative w-100">
              <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-white" style="border-radius: 15px;"></div>
              <div class="position-relative w-100 p-2">
                <div class="row">

                  @foreach($products as $index_product => $fetch_product)

                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 item" data-category="{{ $fetch_product['category'] }}">
                    <div class="position-relative w-100 p-2">
                      <div class="position-relative w-100 overflow-hidden" style="height: 200px;border-radius: 15px;border: 1px solid #ecf0f1;background: url({!! $fetch_product['image'] !!});background-size: cover;background-position: center;background-repeat: no-repeat;">
                        <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-dark" style="opacity: 0.7;"></div>
                        <div class="position-absolute start-0 end-0 top-0 bottom-0" style="background: url({!! $fetch_product['image'] !!});background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                      </div>
                      <div class="position-relative w-100 pt-2">
                        <div class="fs-5 text-primary fw-bold" align="center">
                          {{ $fetch_product['title'] }}
                        </div>
                        <div class="mt-1" align="center">
                          {{ $fetch_product['subtitle'] }}
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="products position-relative w-100 py-5">
  <div class="container">
    <div class="position-relative w-100">
      <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
      <div class="fs-1 position-relative pb-3" align="center">
        Our Products
      </div>
    </div>
    <div class="position-relative w-100 mt-5 pb-3">
      <div class="position-absolute end-0 top-0 bottom-0 w-75 bg-white" style="border-radius: 15px;"></div>
      <div class="row position-relative">
        <div class="col-4">

          <div class="row">
            <div class="col-12 mt-3">
              <div class="position-relative bg-white text-primary p-3" style="border-radius: 15px;" role="button" action="all">
                All Products
              </div>
            </div>
            <div class="col-12 mt-3">
              <div class="position-relative p-3" style="border-radius: 15px;" role="button" action="Excellent Product">
                Excellent Products
              </div>
            </div>
            <div class="col-12 mt-3">
              <div class="position-relative p-3" style="border-radius: 15px;" role="button" action="Equipment List">
                Equipment List
              </div>
            </div>
            <div class="col-12 mt-3">
              <div class="position-relative p-3" style="border-radius: 15px;" role="button" action="">
                Get More Products
              </div>
            </div>
          </div>

        </div>
        <div class="col-8">

          <div class="row p-5 ps-0">

            @foreach($products as $index_product => $fetch_product)

              <div class="col-4 my-3 item" data-category="{{ $fetch_product['category'] }}">
                <div class="position-relative w-100 overflow-hidden bg-white" align="center" style="border: 1px solid #ecf0f1;height: 200px;border-radius: 15px;background-image: url({!! $fetch_product['image'] !!});background-size: contain;background-position: center;background-repeat: no-repeat;">
                  <div class="position-absolute m-2 start-0 top-0 bg-primary text-white py-1 px-2 shadow" style="border-radius: 10px;font-size: 11px;">
                    {{ $fetch_product['category'] }}
                  </div>
                </div>
                <div class="fs-5 mt-2 fw-bold text-primary" align="center">
                  {{ $fetch_product['title'] }}
                </div>
                <div class="fs-6" align="center">
                  {{ $fetch_product['subtitle'] }}
                </div>
              </div>

            @endforeach

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
 -->