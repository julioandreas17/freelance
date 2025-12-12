var action = {};

function navbar_responsive (){
    $('.stand-navbar').css('height', $('.stand-navbar')[0].scrollHeight + 'px');
    if ($('html, body').scrollTop() >= $('.stand-navbar').offset().top){
        if (action['navbar'] == undefined){
            action['navbar'] = 'responsive';

            $('.stand-navbar').find('div').eq(0).removeClass('position-relative')
            .addClass('position-fixed')
            .addClass('start-0').addClass('end-0').addClass('top-0')
            .addClass('mx-auto')
            .removeClass('shadow-sm').addClass('shadow')
            .css('transition', '0s')
            .css('width',  $('.stand-navbar')[0].scrollWidth + 'px')
            .css('margin-top', $('.stand-navbar')[0].scrollHeight / 2 + 'px')
            .css('z-index', '3');

            setTimeout(function (){
                $('.stand-navbar').find('div').eq(0)
                .css('transition', '0.5s')
                .css('width', '100%')
                .css('margin-top', '0px')
                .css('border-radius', '0px')
            }, 100);
        }
    }else{
        if (action['navbar'] != undefined){
            delete action['navbar'];

            $('.stand-navbar').find('div').eq(0).addClass('position-relative')
            .removeClass('position-fixed')
            .removeClass('start-0').removeClass('end-0').removeClass('top-0')
            .removeClass('mx-auto')
            .addClass('shadow-sm').removeClass('shadow')
            .css('border-radius', '20px')
            .css('width',  '100%')
            .css('margin-top', '0px')
            .css('z-index', '0');
        }
    }
}

function render (){
    navbar_responsive();
    requestAnimationFrame(function (){
        render();
    });
}

render();