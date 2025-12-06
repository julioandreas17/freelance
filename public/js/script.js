var action = {};
AOS.init();

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