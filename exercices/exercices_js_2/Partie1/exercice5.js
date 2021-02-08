var number = 42;
while (guess != number){
    var guess = prompt('Deviner le nombre secret');
    if (guess < number){
        alert('C\'est plus grand');
    }
    else if (guess > number){
        alert('C\'est plus petit');
    }
    else if (guess == number){
        alert('Bravo !');
    }
    else{
        alert('Je ne comprends pas');
    }
}
