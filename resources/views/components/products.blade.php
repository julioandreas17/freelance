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