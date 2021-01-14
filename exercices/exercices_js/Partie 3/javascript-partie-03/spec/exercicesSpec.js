describe("Exercice 1", function() {
  it("Donner la taille de la chaîne de caractères.", function() {
    let sentence = "Vous ne pouvez pas comprendre la récursivité sans avoir d’abord compris la récursivité";
    let proposition = stringLength(sentence);
    let answer = 86;
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 2", function() {
  it("Remplacer le premier \"e\" de la chaîne par un espace.", function() {
    let sentence = "Si debugger, c’est supprimer des bugs, alors programmer ne peut être que les ajouter - Edsger Dijkstra";
    let proposition = replaceFirstEBySpace(sentence);
    let answer = "Si d bugger, c’est supprimer des bugs, alors programmer ne peut être que les ajouter - Edsger Dijkstra";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 3", function() {
  it("Concaténer les deux chaînes de caractères.", function() {
    let firstSentence = "Le fossé séparant théorie et pratique";
    let secondSentence = " est moins large en théorie qu’il ne l’est en pratique";
    let proposition = concatenateSentences(firstSentence, secondSentence);
    let answer = "Le fossé séparant théorie et pratique est moins large en théorie qu’il ne l’est en pratique";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 4", function() {
  it("Afficher le cinquième caractère de la chaîne.", function() {
    let sentence = "Avant de vouloir qu’un logiciel soit réutilisable, il faudrait d’abord qu’il ait été utilisable — Ralph Johnson";
    let proposition = displayFifthCharacter(sentence);
    let answer = "t";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 5", function() {
  it("Afficher les 9 premiers caractère.", function() {
    let sentence = "Il y a 10 types de personnes dans le monde : celles qui comprennent le binaire, et celles qui ne le comprennent pas.";
    let proposition = displayFirstNineCharacters(sentence);
    let answer = "Il y a 10";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 6", function() {
  it("Mettre en majuscule la chaîne.", function() {
    let sentence = "J’adorerais changer le monde, mais ils ne veulent pas me fournir le code source.";
    let proposition = upperTheSentence(sentence);
    let answer = "J’ADORERAIS CHANGER LE MONDE, MAIS ILS NE VEULENT PAS ME FOURNIR LE CODE SOURCE.";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 7", function() {
  it("Mettre en minuscule la chaîne.", function() {
    let sentence = "SI VOUS NE RÉUSSISSEZ PAS DU PREMIER COUP, APPELEZ ÇA « VERSION 1.0 ».";
    let proposition = lowerTheSentence(sentence);
    let answer = "si vous ne réussissez pas du premier coup, appelez ça « version 1.0 ».";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 8", function() {
  it("Supprimer les espaces avant et après la chaîne.", function() {
    let sentence = " Quand la vie apporte des questions, Google donne les réponses. ";
    let proposition = removeSpaces(sentence);
    let answer = "Quand la vie apporte des questions, Google donne les réponses.";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 9", function() {
  it("Afficher true le type du paramètre d'entrée de la fonction.", function() {
    let sentence = "Informatique : Alliance d'une science inexacte et d'une activité humaine faillible.";
    let proposition = isString(sentence);
    let answer = "string";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 10", function() {
  it("Afficher l'extension du fichier.", function() {
    let fileName = "CV_DUPONT Jean.pdf";
    let proposition = displayExtension(fileName);
    let answer = "pdf";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 11", function() {
  it("Compter le nombre d'espace dans la chaîne.", function() {
    let sentence = "Cookie : Anciennement petit gâteau sucré, qu'on acceptait avec plaisir. Aujourd'hui : petit fichier informatique drôlement salé, qu'il faut refuser avec véhémence.";
    let proposition = countSpaces(sentence);
    let answer = 21;
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 12", function() {
  it("Inverser une chaîne de caractères.", function() {
    let sentence = "Je ne suis pas un crack en informatique, loin de là, mais il n'y a pas que les mécaniciens qui sachent conduire une voiture.";
    let proposition = invertSentence(sentence);
    let answer = ".erutiov enu eriudnoc tnehcas iuq sneicinacém sel euq sap a y'n li siam ,àl ed niol ,euqitamrofni ne kcarc nu sap sius en eJ";
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 13", function() {
  it("Chercher si dans la chaîne de caractère se trouve \"La Manu\"", function() {
    let sentence = "La Manu, L'école des métiers du numérique";
    let proposition = searchInSentence(sentence);
    let answer = true;
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 14", function() {
  it("Afficher la valeur absolue d'un nombre.", function() {
    let number = -12;
    let proposition = displayAbsoluteValue(number);
    let answer = 12;
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 15", function() {
  it("Afficher les valeurs absolues de plusieurs nombres.", function() {
    let numberArray = [-25, 3.5, 158, -42];
    let proposition = displayAbsoluteValues(numberArray);
    let answer = [25, 3.5, 158, 42];
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 16", function() {
  it("Calculer la surface d'un cercle en fonction de son rayon. L'arondir à l'entier le plus proche.", function() {
    let radius = 22;
    let proposition = calculateArea(radius);
    let answer = 1521;
    expect(proposition).toEqual(answer);
  });
});

describe("Exercice 17", function() {
  it("Calculer l'hypothènuse d\'un triangle rectangle. Arrondir à l'entier inférieur", function() {
    let a = 3;
    let b = 7.5;
    let proposition = calculateHypotenuse(a,b);
    let answer = 8;
    expect(proposition).toEqual(answer);
  });
});
