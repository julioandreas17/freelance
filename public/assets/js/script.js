var content_scroll = {};
var action = {};

function content_scroll_define (){
    $('.wrapper').scrollTop(0);
    content_scroll['layanan'] = $('.layanan').offset().top - ($('.stand-navbar')[0].scrollHeight);
    content_scroll['tentang'] = $('.tentang').offset().top - ($('.stand-navbar')[0].scrollHeight);
    content_scroll['kontak'] = $('.kontak').offset().top - ($('.stand-navbar')[0].scrollHeight);
}
content_scroll_define();

$(window).on('resize', function (){
    content_scroll_define();
});

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

function filosofi_background_color (){
    let position = $('.filosofi').find('.logo')[0].scrollHeight;
    position = position / 2;
    $('.filosofi').find('.position-absolute').eq(1).css('margin-top', position + 'px');
}

function active_menu (){
    let wrapper_scroll = $('.wrapper').scrollTop();
    wrapper_scroll = wrapper_scroll + 10;

    $('.scroll-menu').each(function (index, element){
        $(element).removeClass('bg-primary').removeClass('text-white').addClass('text-primary');
    });

    if (wrapper_scroll >= content_scroll['kontak']){
        $('.scroll-menu[href="kontak"]').each(function (index, element){
            $(element).removeClass('text-primary').addClass('bg-primary').addClass('text-white');
        });
    } else if (wrapper_scroll >= content_scroll['tentang']){
        $('.scroll-menu[href="tentang"]').each(function (index, element){
            $(element).removeClass('text-primary').addClass('bg-primary').addClass('text-white');
        });
    } else if (wrapper_scroll >= content_scroll['layanan']){
        $('.scroll-menu[href="layanan"]').each(function (index, element){
            $(element).removeClass('text-primary').addClass('bg-primary').addClass('text-white');
        });
    }
}

function render (){
    navbar_responsive();
    filosofi_background_color();
    active_menu();
    requestAnimationFrame(function (){
        render();
    });
}

render();

$('body').find('.stand-navbar').on('click', '.bi-list', function (){
    $('.sidebar').removeClass('d-none')
    .removeClass('d-sm-none')
    .removeClass('d-md-none')
    .addClass('d-block')
    .addClass('d-sm-block')
    .addClass('d-md-block');
    $('.sidebar').find('.content').css('transform', 'translateX(100%)');
    setTimeout(function (){
        $('.sidebar').find('.content').css('transform', 'translateX(0)');    
    }, 5);
});

$('body').find('.sidebar').on('click', '.close, .bi-x', function (){
    $('.sidebar').find('.content').css('transform', 'translateX(100%)');
    setTimeout(function (){
        $('.sidebar').removeClass('d-block')
        .removeClass('d-sm-block')
        .removeClass('d-md-block')
        .addClass('d-none')
        .addClass('d-sm-none')
        .addClass('d-md-none');
    }, 510);
});

$('body').on('click', '.scroll-menu', function (event){
    event.preventDefault();
    let link = $(this);
    let href = link.attr('href');
    $('.wrapper').animate({
        scrollTop: content_scroll[href],
    });
    $('.sidebar').find('.close').trigger('click');
});

$('body').find('.ekspansi').on('click', 'button', function (){
    $('.wrapper').animate({
        scrollTop: content_scroll['kontak'],
    });
});

$(window).on('load', function (){
    $('.splash').fadeOut('slow');
});