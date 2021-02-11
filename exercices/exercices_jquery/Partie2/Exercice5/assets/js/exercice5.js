$('#green').hover(function() {
    $('#text').css('color', 'green');
});
$('#blue').hover(function() {
    $('#text').css('color', 'blue');
});
$('#red').hover(function() {
    $('#text').css('color', 'red');
});
$('.color').mouseleave(function() {
    $('#text').css('color', 'black');
});