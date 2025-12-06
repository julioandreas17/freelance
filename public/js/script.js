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