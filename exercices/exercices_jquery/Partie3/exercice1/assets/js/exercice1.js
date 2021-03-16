var randomNumber = Math.floor(Math.random() * Math.floor(100));
var trys = 0;
$('#valid').click(function() {
    let guess = $('#number').val();
    if (guess < randomNumber){
        alert('Non c\'est plus grand');
        trys++
    }
    else if (guess > randomNumber){
        alert('Non c\'est plus petit');
        trys++
    }
    else if (guess == randomNumber){
        alert('Bravo !!! \r\nTu as réussi au bout de ' + trys + ' tentatives.');
    }
});
