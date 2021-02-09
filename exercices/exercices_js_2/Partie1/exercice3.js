let age = prompt('Quel est votre âge ?');

if (age < 18 && age > 0) {
    alert('Vous êtes mineur');
} else if (age >= 18 && age < 125) {
    alert('Vous êtes majeur');
} else {
    alert('Veuillez entrer un âge correct.');
}