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

function filosofi_background_color (){
    let position = $('.filosofi').find('.logo')[0].scrollHeight;
    position = position / 2;
    $('.filosofi').find('.position-absolute').eq(1).css('margin-top', position + 'px');
}

function check_active_menu (){
    let wrapper = $('.wrapper');
    let wrapper_scroll = wrapper.scrollTop();
    let links = $('.navbar').find('.scroll-menu');
    links.each(function (index, element){
        let link = $(this);
        let href = link.attr('href');
        let section = $('.' + href);
        let section_offset = section.offset().top;
        section_offset = section_offset - $('.stand-navbar')[0].scrollHeight;

        if (wrapper_scroll >= section_offset && section_offset <= section_offset + section[0].scrollHeight){
            if (action['active_menu'] == undefined){
                action['active_menu'] = '';
            }
            if (action['active_menu'] != href){
                action['active_menu'] = href;
            }
        }
    });
}

function active_menu (){
    let links = $('.scroll-menu');
    links.each(function (index, element){
        let link = $(this);
        let href = link.attr('href');
        if (action['active_menu'] != undefined){
            if (href == action['active_menu']){
                link.removeClass('text-primary').addClass('bg-primary').addClass('text-white');
            }else{
                link.addClass('text-primary').removeClass('bg-primary').removeClass('text-white');
            }
        }
    });
}

function render (){
    navbar_responsive();
    filosofi_background_color();
    check_active_menu();
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
    let scroll_top = $('.wrapper').scrollTop();
    scroll_top = scroll_top + $('.' + href).offset().top;
    scroll_top = scroll_top - $('.stand-navbar')[0].scrollHeight;
    $('.wrapper').animate({
        scrollTop: scroll_top,
    });
    $('.sidebar').find('.close').trigger('click');
});

$('body').find('.ekspansi').on('click', 'button', function (){
    $('.scroll-menu[href="kontak"]').eq(0).trigger('click');
});

$(window).on('load', function (){
    $('.splash').fadeOut('slow');
});