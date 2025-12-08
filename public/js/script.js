var action = {};
AOS.init();

var active_service = 1;
var services = {};
services[1] = {
  image: URL + '/public/images/contractor.jpg',
  content: `
    <div class="fs-5 text-primary">
      Low Voltage & Medium Voltage Electrical Installation Contractor
    </div>
    <div class="fs-6 mt-2">
      We provide contractor services for electrical installations in various sectors, including :
    </div>
    <table class="w-100 mt-1">
      <tbody>
        <tr>
          <td style="vertical-align: top;">1. </td>
          <td style="vertical-align: top;">Installation of LV & MV cable networks</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">2. </td>
          <td style="vertical-align: top;">Installation of distribution substations</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">3. </td>
          <td style="vertical-align: top;">Installation of transformers and MV cubicles</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">4. </td>
          <td style="vertical-align: top;">Installation of LVMDP panels, MDB panels, and distribution panels</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">5. </td>
          <td style="vertical-align: top;">Lighting installation for buildings, factories, and industrial areas</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">6. </td>
          <td style="vertical-align: top;">Earthing systems and lightning protection</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">7. </td>
          <td style="vertical-align: top;">All work is carried out by certified technicians and follows electrical safety (K3) standards</td>
        </tr>
      </tbody>
    </table>
    <div class="fs-6">&nbsp;</div>
  `,
};

services[2] = {
  image: URL + '/public/images/consulting.jpg',
  content: `
    <div class="fs-5 text-primary">
      Electrical Engineering Planning & Consultation
    </div>
    <div class="fs-6 mt-2">
      Our engineering team provides the following services :
    </div>
    <table class="w-100 mt-1">
      <tbody>
        <tr>
          <td style="vertical-align: top;">1. </td>
          <td style="vertical-align: top;">Feasibility Study</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">2. </td>
          <td style="vertical-align: top;">Power System Planning</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">3. </td>
          <td style="vertical-align: top;">Single Line Diagram (SLD) and engineering design</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">4. </td>
          <td style="vertical-align: top;">Load study and short-circuit analysis</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">5. </td>
          <td style="vertical-align: top;">Energy audits and electrical installation audits</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">6. </td>
          <td style="vertical-align: top;">System protection calculations and coordination studies</td>
        </tr>
      </tbody>
    </table>
    <div class="fs-6">&nbsp;</div>
  `,
};

services[3] = {
  image: URL + '/public/images/procurement.jpg',
  content: `
    <div class="fs-5 text-primary">
      Procurement of Electrical Materials and Equipment
    </div>
    <div class="fs-6 mt-2">
      We provide procurement services for electrical materials for both project-scale and maintenance needs, including :
    </div>
    <table class="w-100 mt-1">
      <tbody>
        <tr>
          <td style="vertical-align: top;">1. </td>
          <td style="vertical-align: top;">Low and medium voltage cables</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">2. </td>
          <td style="vertical-align: top;">Transformers</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">3. </td>
          <td style="vertical-align: top;">Electrical panels and components (MCB, MCCB, ACB, relays)</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">4. </td>
          <td style="vertical-align: top;">Lightning protection equipment</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">5. </td>
          <td style="vertical-align: top;">Grounding equipment</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">6. </td>
          <td style="vertical-align: top;">Installation equipment and accessories</td>
        </tr>
      </tbody>
    </table>
    <div class="fs-6">&nbsp;</div>
  `,
};

services[4] = {
  image: URL + '/public/images/panel.jpg',
  content: `
    <div class="fs-5 text-primary">
      Panel Builder & Electrical System Fabrication
    </div>
    <div class="fs-6 mt-2">
      We manufacture various types of electrical panels with high fabrication standards, including :
    </div>
    <table class="w-100 mt-1">
      <tbody>
        <tr>
          <td style="vertical-align: top;">1. </td>
          <td style="vertical-align: top;">LVMDP</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">2. </td>
          <td style="vertical-align: top;">MDB & SDP</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">3. </td>
          <td style="vertical-align: top;">ATS–AMF Panels</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">4. </td>
          <td style="vertical-align: top;">Capacitor Bank Panels</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">5. </td>
          <td style="vertical-align: top;">Control & Automation Panels (PLC, SCADA)</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">6. </td>
          <td style="vertical-align: top;">Custom electrical enclosures</td>
        </tr>
      </tbody>
    </table>
    <div class="fs-6">&nbsp;</div>
  `,
};

services[5] = {
  image: URL + '/public/images/sertification.jpg',
  content: `
    <div class="fs-5 text-primary">
      Training, Certification & Consulting Services
    </div>
    <div class="fs-6 mt-2">
      We provide human resource competency improvement services :
    </div>
    <table class="w-100 mt-1">
      <tbody>
        <tr>
          <td style="vertical-align: top;">1. </td>
          <td style="vertical-align: top;">Basic & advanced electrical engineering training</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">2. </td>
          <td style="vertical-align: top;">Electrical Safety (K3 Listrik) training</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">3. </td>
          <td style="vertical-align: top;">Operator & panel technician training</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">4. </td>
          <td style="vertical-align: top;">Consultation for business entity and technical personnel certification</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">5. </td>
          <td style="vertical-align: top;">Assistance in preparation for SKTT, SLO, and other certifications</td>
        </tr>
      </tbody>
    </table>
    <div class="fs-6">&nbsp;</div>
  `,
};

$('body').find('.services').on('click', 'div[role="button"]', function (){
  let services_element = $('.services');
  services_element.find('img').css('transition', 'unset').css('opacity', '0');
  services_element.find('.content').css('transition', 'unset').css('opacity', '0');

  let button = $(this);
  let action = button.attr('action');
  if (action == 'up'){
    active_service = active_service - 1;
    if (active_service < 1){
      active_service = 5;
    }
  }

  if (action == 'down'){
    active_service = active_service + 1;
    if (active_service > 5){
      active_service = 1;
    }
  }

  services_element.find('img').attr('src', services[active_service]['image']);
  services_element.find('.content').html(services[active_service]['content']);
  setTimeout(function (){
    services_element.find('img').css('transition', '0.5s').css('opacity', '1');
    services_element.find('.content').css('transition', '0.5s').css('opacity', '1');
  }, 5);
});

$('body').find('.about-us').on('click', 'div[role="button"]', function (){
  let button = $(this);
  let target = button.attr('target');
  let element = $('.about-us');

  element.find('div[role="button"]').each(function (index, element){
    $(element).removeClass('bg-primary').removeClass('text-white').addClass('text-primary');
  });
  button.addClass('bg-primary').addClass('text-white').removeClass('text-primary');
  
  element.find('.content').each(function (index, element){
    $(element).addClass('d-none');
    $(element).hide();
  });

  element.find('.' + target).removeClass('d-none').fadeIn();
  AOS.init();
});

$('body').find('.products').on('click', 'div[role="button"]', function (){
  let products_element = $('.products');
  let button = $(this);
  let action = button.attr('action');
  if (action != ''){

    products_element.find('.item').each(function (index, element){
      $(element).hide();
    });

    products_element.find('div[role="button"]').each(function (index, element){
      $(element).removeClass('bg-white')
      .removeClass('text-primary');
    });
    button.addClass('bg-white')
    .addClass('text-primary');

    if (action == 'all'){
      products_element.find('.item').each(function (index, element){
        $(element).fadeIn();
      });
    } else {
      products_element.find('.item').each(function (index, element){
        if ($(element).attr('data-category') == action){
          $(element).fadeIn();
        }
      });
    }

  }
});

function open_menu_top (){
  let element = $('.menu-top');
  element.removeClass('position-relative')
  .addClass('position-fixed')
  .addClass('start-0')
  .addClass('end-0')
  .addClass('top-0')
  .addClass('w-100')
  .addClass('shadow')
  .css('z-index', 7)
  .css('margin-top', '-'+ element[0].scrollHeight +'px');
  setTimeout(function (){
    element.css('transition', '0.5s')
    .css('margin-top', '0px');
  }, 1);

  if (action['close_menu_top'] != undefined){
    delete action['close_menu_top'];
  }
}

function close_menu_top (){
  let element = $('.menu-top');
  element.addClass('position-relative')
  .removeClass('position-fixed')
  .removeClass('start-0')
  .removeClass('end-0')
  .removeClass('top-0')
  .removeClass('w-100')
  .removeClass('shadow')
  .removeAttr('style');

  if (action['open_menu_top'] != undefined){
    delete action['open_menu_top'];
  }
}

function stand_menu_top (){
  let element = $('.stand-menu-top');
  let reference = $('.menu-top');
  let body = $('html, body');
  element.css('height', reference[0].scrollHeight + 'px');

  if (body.scrollTop() > element[0].scrollHeight + 20){
    if (action['open_menu_top'] == undefined){
      action['open_menu_top'] = 'run';
      open_menu_top();
    }
  }else{
    if (action['close_menu_top'] == undefined){
      action['close_menu_top'] = 'run';
      close_menu_top();
    }
  }
}

function render (){
  stand_menu_top();
  requestAnimationFrame(function (){
    render();
  });
}
render();