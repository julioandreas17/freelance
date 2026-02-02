var action = {};

function navbar_responsive (){
    $('.stand-navbar').css('height', $('.stand-navbar')[0]?.scrollHeight + 'px');
    if ($('html, body').scrollTop() >= $('.stand-navbar').offset()?.top){
        if (action['navbar'] == undefined){
            action['navbar'] = 'responsive';

            $('.stand-navbar').find('div').eq(0).removeClass('position-relative')
            .addClass('position-fixed')
            .addClass('start-0').addClass('end-0').addClass('top-0')
            .addClass('mx-auto')
            .removeClass('shadow-sm').addClass('shadow')
            .css('transition', '0s')
            .css('width',  $('.stand-navbar')[0].scrollWidth + 'px')
            .css('margin-top', $('.stand-navbar')[0]?.scrollHeight / 2 + 'px')
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
    let position = $('.filosofi').find('.logo')[0]?.scrollHeight;
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
        let section_offset = section.offset()?.top;
        section_offset = section_offset - $('.stand-navbar')[0]?.scrollHeight;

        if (wrapper_scroll >= section_offset && section_offset <= section_offset + section[0]?.scrollHeight){
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
    if ($('.layanan').length > 0){
        check_active_menu();
        active_menu();
    }
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
    scroll_top = scroll_top + $('.' + href).offset()?.top;
    scroll_top = scroll_top - $('.stand-navbar')[0]?.scrollHeight;
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

$('body').on('click', '.btn-password', function (){
    let button = $(this);
    let target = button.attr('target');
    let input = $('input[name="'+ target +'"]');
    let type = input.attr('type');
    if (type == 'password'){
        input.attr('type', 'text');
        button.removeClass('btn-primary').addClass('btn-danger').html('<i class="bi bi-eye"></i>');
    }else{
        input.attr('type', 'password');
        button.addClass('btn-primary').removeClass('btn-danger').html('<i class="bi bi-eye-slash"></i>');
    }
});

function update_session (token){
    $.ajax({
        url: URL + '/update_session?session=' + token,
        type: 'GET',
        contentType: false,
        processData: false,
        success: function (response){
            console.log(JSON.stringify(response));
        },
        error: function (response){
            console.log(JSON.stringify(response));
        },
    });
}

$('body').on('click', '.btn-unggah-galeri', function (){
    let modal = $('#modal-unggah-galeri');
    let content = `
        <div class="modal-header">
          <div class="position-relative w-100" align="right">
            <a role="button" class="text-danger text-decoration-none fs-3" data-bs-dismiss="modal">
              <i class="bi bi-x-circle"></i>
            </a>
          </div>
        </div>
        <div class="modal-body">
          <div class="w-100 bx-flashing" align="center">
            Memproses ...
          </div>
        </div>
    `;
    modal.find('.modal-content').html(content);

    let data = new FormData();
    data.append('session', session);

    $.ajax({
        url: URL + '/api/form_unggah_galeri',
        type: 'POST',
        data: data,
        contentType: false,
        processData: false,
        success: function (response){
            modal.find('.modal-content').html(response.form);
        },
        error: function (response){
            content = `
                <div class="modal-header">
                  <div class="position-relative w-100" align="right">
                    <a role="button" class="text-danger text-decoration-none fs-3" data-bs-dismiss="modal">
                      <i class="bi bi-x-circle"></i>
                    </a>
                  </div>
                </div>
                <div class="modal-body">
                  <div class="fs-5" align="center">
                    ⚠️ Terjadi Kesalahan !
                  </div>
                </div>
            `;
            modal.find('.modal-content').html(content);
            console.log(JSON.stringify(response));
        },
    });
});

$('body').on('submit', '.form-login', function (event){
    event.preventDefault();
    let form = $(this);
    let method = form.attr('method');
    let action = form.attr('action');
    let form_data = form.serializeArray();
    let button = form.find('button[type="submit"]');
    let button_normal = button.html();
    let button_loader = `Memproses ...`;
    button.prop('disabled', true).html(button_loader);
    let data = new FormData();
    $.each(form_data, function (index, input){
        data.append(input.name, input.value);
    });
    data.append('session', session);
    $.ajax({
        url: action,
        type: method,
        data: data,
        contentType: false,
        processData: false,
        success: async function (response){
            if (response.status == 'error'){
                Swal.fire({
                    icon: 'error',
                    title: 'Opps !',
                    text: response.message,
                });
            }
            if (response.status == 'success'){
                session = response.token;
                $('#modal-unggah-galeri').find('.bi-x-circle').trigger('click');
                await update_session(response.token);
                Swal.fire({
                    icon: 'success',
                    title: 'Sip !',
                    text: response.message,
                });
            }
            button.prop('disabled', false).html(button_normal);
        },
        error: function (response){
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan !',
                text: 'Gagal untuk melanjutkan',
            });
            button.prop('disabled', false).html(button_normal);
            console.log(JSON.stringify(response));
        },
    });
});

$('body').on('change', 'input[type="file"]', function (){
    let input = $(this);
    let id = input.attr('id');
    let file = input.prop('files')[0];
    let label = $('label[for="'+ id +'"]');
    let content = label.find('div').eq(0);
    if (content.length > 0){

        let generate = `
            <div class="position-relative w-100" align="center">
                <img src="${ window.URL.createObjectURL(file) }" alt="preview" style="height: 200px;">
            </div>
        `;
        content.html(generate);

    }
});

$('body').on('submit', '.form-unggah-galeri', function (event){
    event.preventDefault();
    let form = $(this);
    let method = form.attr('method');
    let action = form.attr('action');
    let button = form.find('button[type="submit"]');
    let button_normal = button.html();
    let button_loader = `Memproses ...`;
    let file = form.find('input[type="file"]').prop('files')[0];
    if (file == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Opps !',
            text: 'Silahkan pilih file untuk di upload',
        });
    }else{
        button.prop('disabled', true).html(button_loader);
        let data = new FormData();
        data.append('session', session);
        data.append('galeri', file);
        $.ajax({
            url: action,
            type: method,
            data: data,
            contentType: false,
            processData: false,
            success: function (response){
                if (response.status == 'error'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Opps !',
                        text: response.message,
                    });
                }
                if (response.status == 'success'){
                    $('#modal-unggah-galeri').find('.bi-x-circle').trigger('click');
                    Swal.fire({
                        icon: 'success',
                        title: 'Sip !',
                        text: response.message,
                    });
                    load_data_galeri();
                }
                button.prop('disabled', false).html(button_normal);
            },
            error: function (response){
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi Kesalahan !',
                    text: 'Gagal untuk melanjutkan',
                });
                button.prop('disabled', false).html(button_normal);
                console.log(JSON.stringify(response));
            },
        });
    }
});

function load_data_galeri (){
    let galeri = $('.galeri');
    if (galeri.length > 0){
        let content = galeri.find('.content');
        let content_loader = `
            <div class="position-relative w-100 p-5 mt-5" style="border: 2px dashed; #6c757d;border-radius: 20px;color: #6c757d;">
                <div align="center">
                    Sedang memuat galeri ...
                </div>
            </div>
        `;
        let content_empty = `
            <div class="position-relative w-100 p-5 mt-5" style="border: 2px dashed; #6c757d;border-radius: 20px;color: #6c757d;">
                <div align="center">
                    <i class="bi bi-images" style="font-size: 50px;"></i>
                </div>
                <div align="center">
                    Belum ada galeri tersedia saat ini
                </div>
            </div>
        `;
        content.html(content_loader);
        $.ajax({
            url: './api/load_galeri',
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (response){
                if (response.count > 0){

                    let column = ``;
                    $.each(response.data, function (index, gallery){
                        let options = ``;
                        if (session != ''){
                            options = `
                                <div class="position-absolute end-0 top-0">
                                    <div class="dropdown position-relative m-2 bg-white py-1 px-2 rounded-pill" role="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-chevron-down"></i>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item text-danger hapus-galeri" role="button" data-id="${ gallery.id }"><i class="bi bi-trash"></i> Hapus Galeri</a></li>
                                        </ul>
                                    </div>
                                </div>
                            `;
                        }
                        column += `
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="position-relative w-100 h-100 p-3">
                                    <div class="position-relative w-100 h-100">
                                        <img src="./public/assets/images/icon.png" class="w-100" style="opacity: 0;">
                                        <div class="position-absolute start-0 end-0 top-0 bottom-0" style="border-radius: 20px;background-image: url(${ gallery.picture });background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
                                        <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-dark" style="border-radius: 20px;opacity: 0.7;"></div>
                                        <div class="position-absolute start-0 end-0 top-0 bottom-0" style="border-radius: 20px;background-image: url(${ gallery.picture });background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                        ${ options }
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    let generate = `
                        <div class="content position-relative w-100 mt-5">
                            <div class="row">
                                ${ column }
                            </div>
                        </div>
                    `;
                    content.html(generate);

                }else{
                    content.html(content_empty);
                }
            },
            error: function (response){
                console.log(JSON.stringify(response));
                let content_error = `
                    <div class="position-relative w-100 p-5 mt-5" style="border: 2px dashed; #6c757d;border-radius: 20px;color: #6c757d;">
                        <div align="center">
                            <i class="bi bi-exclamation-triangle" style="font-size: 50px;"></i>
                        </div>
                        <div align="center">
                            Terjadi masalah saat menampilkan galeri
                        </div>
                    </div>
                `;
                content.html(content_error);
            },
        });
    }
}
load_data_galeri();

$('body').find('.galeri').on('click', '.hapus-galeri', function (){
    let parent = $('.galeri');
    let link = $(this);
    let id = link.attr('data-id');
    Swal.fire({
        title: "Yakin ingin mneghapus galeri?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Jangan",
        denyButtonText: "Hapus Saja"
      }).then((result) => {
        if (result.isConfirmed) {
          // nothing happend
        } else if (result.isDenied) {
          
            let data = new FormData();
            data.append('session', session);
            data.append('id', id);
            $.ajax({
                url: './api/hapus_gallery',
                type: 'POST',
                data: data,
                contentType: false,
                processData: false,
                success: function (response){
                    if (response.status == 'error'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Opps !',
                            text: response.message,
                        });
                    }

                    if (response.status == 'success'){
                        load_data_galeri();
                        Swal.fire({
                            icon: 'success',
                            title: 'Sip !',
                            text: response.message,
                        });
                    }
                },
                error: function (response){
                    console.log(JSON.stringify(response));
                    Swal.fire({
                        icon: 'error',
                        title: 'Opps !',
                        text: 'Terjadi kesalahan sistem',
                    });
                },
            });

        }
      });
});

$('body').on('click', '.whatsapp-float-button', function (){
    let button = $(this);
    let content = $('.whatsapp-float');
    if (content.hasClass('d-none') == true){
        content.removeClass('d-none');
        button.removeClass('bg-success').addClass('bg-danger').html('<i class="bi bi-x"></i>');
    }else{
        content.addClass('d-none');
        button.removeClass('bg-danger').addClass('bg-success').html('<i class="bi bi-whatsapp"></i>');
    }
});