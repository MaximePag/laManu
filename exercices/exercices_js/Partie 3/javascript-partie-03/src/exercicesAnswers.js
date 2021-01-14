//Exercice 1 : Donner la taille de la chaîne de caractères.
let stringLength = function (sentence) {
  let reponse = sentence.length;
  return reponse;
}

//Exercice 2 : Remplacer le premier "e" de la chaîne par un espace.
let replaceFirstEBySpace = function (sentence) {
  let reponse = sentence.replace("e", " ");
  return reponse;
}

//Exercice 3 : Concaténer les deux chaînes de caractères.
let concatenateSentences = function (firstSentence, secondSentence) {
  let reponse = firstSentence.concat(secondSentence);
  return reponse;
}

//Exercice 4 : Afficher le cinquième caractère de la chaîne.
let displayFifthCharacter = function (sentence) {
  let reponse = sentence.charAt(4);
  return reponse;
}

//Exercice 5 : Afficher les 9 premiers caractère.
let displayFirstNineCharacters = function (sentence) {
  let reponse = sentence.substring(0, 9);
  return reponse;
}

//Exercice 6 : Mettre en majuscule la chaîne.
let upperTheSentence = function (sentence) {
  let reponse = sentence.toUpperCase();
  return reponse;
}

//Exercice 7 : Mettre en minuscule la chaîne.
let lowerTheSentence = function (sentence) {
  let reponse = sentence.toLowerCase();
  return reponse;
}

//Exercice 8 : Supprimer les espaces avant et après la chaîne.
let removeSpaces = function (sentence) {
  let reponse = sentence.trim();
  return reponse;
}

//Exercice 9 : Afficher true si le paramètre d'entrée de la fonction est de type *string*.
let isString = function (sentence) {
  let reponse = false;
  if (typeof sentence == 'string') {
    reponse = true;
  }
  return reponse;
}

//Exercice 10 : Afficher l'extension du fichier.
let displayExtension = function (fileName) {
  let reponse = fileName.split('.').pop();
  return reponse;
}

//Exercice 11 : Compter le nombre d'espace dans la chaîne.
let countSpaces = function (sentence) {
  let reponse = sentence.match(/ /g).length;
  return reponse;
}

//Exercice 12 : Inverser une chaîne de caractères.
let invertSentence = function (sentence) {
  let reponse = sentence.split('').reverse().join('');
  return reponse;
}

//Exercice 13 : Chercher si dans la chaîne de caractère se trouve "La Manu".
let searchInSentence = function (sentence) {
  let reponse = sentence.includes("La Manu");
  return reponse;
}

//Exercice 14 : Afficher la valeur absolue d'un nombre.
let displayAbsoluteValue = function (number) {
  let reponse = Math.abs(number);
  return reponse;
}

//Exercice 15 : Afficher les valeurs absolues de plusieurs nombres.
let displayAbsoluteValues = function (numbersArray) {
  let reponse = numbersArray.map(Math.abs);
  return reponse;
}

//Exercice 16 : Calculer la surface d'un cercle en fonction de son rayon. L'arondir à l'entier le plus proche.
let calculateArea = function (radius) {
  let reponse = Math.round(Math.pow(radius, 2) * Math.PI);
  return reponse;
}

//Exercice 17 : Calculer l'hypothènuse d\'un triangle rectangle. Arrondir à l'entier inférieur.
let calculateHypotenuse = function (a, b) {
  let reponse = Math.floor(Math.hypot(a, b));
  return reponse;
}
