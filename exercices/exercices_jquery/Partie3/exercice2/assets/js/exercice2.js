$('#valid').click(function() {
    let sum = 0;
    $(".grades").each(function() {
        sum += parseInt(this.value);
    });
    let result = sum / 5;
    if (result >= 0 && result < 10){
        alert('Votre note : ' + result + '\r\nEn dessous de la moyenne.');
    }
    else if (result >= 10 && result < 13){
        alert('Votre note : ' + result + '\r\nMoyen.');
    }
    else if (result >= 13 && result < 16){
        alert('Votre note : ' + result + '\r\nBien.');
    }
    else if (result >= 16 && result < 20){
        alert('Votre note : ' + result + '\r\nTrès bien.');
    }
    else if (result == 20){
        alert('Votre note : ' + result + '\r\nExcellent.');
    }
    console.log(result);
});
