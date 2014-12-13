function close() {
    $('.hidden-form').css('display', 'none');
    $('.hidden-background').css('display', 'none');
}

$('#add-project').on('click', function() {
    $('.hidden-form').css('display', 'block');
    $('.hidden-background').css('display', 'block');
});


$('.hidden-background').on('click', close);

$('.close').on('click', close);