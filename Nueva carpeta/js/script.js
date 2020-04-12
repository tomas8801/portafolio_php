
    
     var $projects = $('.projects');

    $projects.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    $('ul.filters > li').on('click', function (e) {

        e.preventDefault();

        var filter = $(this).attr('data-filter');

        $('ul.filters > li').removeClass('active');
        $(this).addClass('active');
        $('.contacto').addClass('d-none');

        $projects.isotope({filter: filter})

    });

    $('.card').mouseenter(function () {

        $(this).find('.card-overlay').css({'top': '-100%'});
        $(this).find('.card-hover').css({'top': '0'});

    }).mouseleave(function () {
        $(this).find('.card-overlay').css({'top': '0'});
        $(this).find('.card-hover').css({'top': '100%'});
    });


    $('.uno').on('click', function () {

        $(this).hide();
        $(this).siblings().hide();
    });




    $('#contacto').on('click', function () {
        $('.contacto').removeClass('d-none');
    });



   