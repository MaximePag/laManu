//Exercice 1 : Créer un tableau days et lui ajouter les jours de la semaine.
let createArray = function (day) {
  let reponse = day = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
  return reponse;
}

//Exercice 2 : Retouner le 3ème élément du tableau days', function() {
let returnThirdElement = function (day) {
  let reponse = day[2];
  return reponse;
}

//Exercice 3 : Afficher la valeur de l\'index 3 du tableau days.', function() {
let returnThirdIndex = function (day) {
  let reponse = day[3];
  return reponse;
}

//Exercice 4 : Changer le 2ème élément du tableau languages par php.', function() {
let changeSecondElement = function (array) {
  array[1] = 'php';
  return array;
}

//Exercice 5 : Ajouter ruby et python à la fin du tableau languages.', function() {
let addAtTheEnd = function (array) {
  array.push("ruby", "python");
  return array;
}

//Exercice 6 : Ajouter html et css au début du tableau languages.', function() {
let addAtFirst = function (array) {
  array.unshift("html", "css");
  return array;
}

//Exercice 7 : Supprimer le premier élément du tableau languages.', function() {
let removeFirstElement = function (array) {
  array.shift();
  return array;
}

//Exercice 8 : Supprimer le dernier élément du tableau languages.', function() {
let removeLastElement = function (array) {
  array.pop();
  return array;
}

//Exercice 9 : Créer un tableau associatif person. Lui ajouter les index name, age et city avec les valeurs Jean, 45, Paris.', function() {
let createPerson = function () {
  var person = new Array();
  person['name'] = 'Jean'
  person['age'] = 45
  person['city'] = 'Paris'
  return person;
}

//Exercice 10 : Retourner la valeur de l\'index nom du tableau person.', function() {
let returnName = function (person) {
  var person = { name: "Jean", age: 45, city: "Paris" };
  return person['name'];
}

//Exercice 11 : Stocker tous les index du tableau person dans des variables séparées et les retourner dans une même phrase de type : "Bonjour, je suis Jean. J\'ai 45 ans et j\'habite Paris."', function() {
let returnSentence = function (person) {
  var name = person['name']
  var age = person['age']
  var city = person['city']
  return "Bonjour, je suis " + name + ". J\'ai " + age + " ans et j\'habite " + city + ".";
}

//Exercice 12 : Transformer la variable string en tableau.', function() {
let returnArray = function (string) {
  let reponse = string.split(",")
  return reponse;
}

//Exercice 13 : Trier le tableau array.', function() {
let sortArray = function (array) {
  let reponse = array.sort()
  return reponse;
}

//Exercice 14 : Transformer le tableau array en chaîne de caractères', function() {
let returnString = function (array) {
  let reponse = array.toString()
  return reponse;
}
