var $span = $('<span>').addClass('glyphicon raid-progress');

$('.guild-progress li').each(function () {
    var $t = $(this);
    $t.append($span.clone().addClass('mythic-progress'));
    $t.append($span.clone().addClass('heroic-progress'));
    $t.append($span.clone().addClass('normal-progress'));

    $t.find($span).addClass('glyphicon-check');

    if ($t.hasClass('mythic')) {
        // do nothing
    } else if ($t.hasClass('heroic')) {
        $t.find('span').eq(0).addClass('glyphicon-unchecked');
    } else {
        $t.find('span').not(':last-child').addClass('glyphicon-unchecked');
    }

    $t.find('span').not('.glyphicon-unchecked').addClass('glyphicon-check');
});

$('.apply-now').click(function () {
    scrollTo('#apply');
});

$('a[href^="#"]').click(function () {
    scrollTo($(this).attr('href'));
});

function scrollTo(selector) {
    $('html, body').animate({
        scrollTop: $( selector ).offset().top
    }, 500);
}

var $armoryInput = $('#armory').css('font-size', '.8em');
var baseArmory = $armoryInput.val();

var $character = $('#character');
var $realm = $('#realm');
$('#character, #realm').keyup(function (e) {
    var realm = $realm.val().replace(' ', '-').replace("'", '').toLowerCase();
    $armoryInput.val(baseArmory + realm + '/' + $character.val() + '/simple');
});

$('form').submit(function () {
    $('#armory').prop('disabled', false);
});

$('#recaptcha_response_field').prop('required', 'required');

$('#recaptcha_widget_div').hide();

$('input').focus(function () {
    $('#recaptcha_widget_div').fadeIn();
});

var boss1tooltip = '<a href="http://www.youtube.com/watch?v=E-viay6eizg">General Guide</a>\
<ul>\
<li><a href="http://www.youtube.com/watch?v=ke2lqEG-5pQ" target="_blank">Healer</a></li>\
<li><a href="http://www.youtube.com/watch?v=K8p7aETQTSo" target="_blank">Tank</a></li>\
<li><a href="http://www.youtube.com/watch?v=huT-uhxhHpA" target="_blank">DPS</a></li>\
</ul>';

$('#boss-1 a').unbind().popover({
    html: true,
    title: 'Immersius Guides',
    content: boss1tooltip,
    placement: 'top'
}).click(function () {
    return false;
});
