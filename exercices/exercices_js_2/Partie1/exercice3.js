var age = prompt('Quel est votre âge ?')
if (age < 18 && age > 0){
    alert('Vous êtes mineur');
}
if (age >= 18 && age < 125){
    alert('Vous êtes majeur');
}
else{
    alert('Ce n\'est pas possible');
}
alert('Bonjour ' + username);