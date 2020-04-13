
$(window).scroll(function() {
    // отслеживаем событие
    var scrolled = $(window).scrollTop();
    var width = $(window).width();
    var height = $(window).height();
    var bh = $('body').height();

    console.log(bh);

    if (scrolled > 100 && width > 1171) {
        $('.header').addClass('pos_fixed');
    } else {
        $('.header').removeClass('pos_fixed');
    }

    if (width > 1171) {
        if (scrolled > 100) {
            if (height < 774) {
                $('.vk_blok').hide();
            }
            $('.scroll_right').css({
                'position': 'fixed',
                'top': '88px'
            }).addClass('active_scroll');
            if (scrolled > (bh - 154 - 819)) {
                $('.scroll_right').css({
                    'position': 'fixed',
                    'top': bh - 300 - 519 - 50 - scrolled
                });
            }
        } else {
            if (height < 774) {
                $('.vk_blok').show();
            }
            $('.scroll_right').css({
                'position': 'relative',
                'top': '0px'
            }).removeClass('active_scroll');
        }
    }

});