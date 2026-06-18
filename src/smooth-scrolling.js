// Smooth scrolling (solo para links de anclaje #id en la misma página;
// los links a otras páginas deben navegar normalmente)
$('.anchor').on('click', function (event) {
    let href = $(this).attr('href');

    if (!href || href.charAt(0) !== '#' || href.length < 2) {
        return;
    }

    let target = $(href);

    if (!target.length) {
        return;
    }

    event.preventDefault();

    $('body, html').stop(true, true).animate({
        scrollTop: target.offset().top - 66
    }, 1000);
});