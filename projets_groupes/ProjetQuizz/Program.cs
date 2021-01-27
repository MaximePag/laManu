using System;
using System.Threading;

namespace Projet_1_Quizz
{
    class Program
    {
        static void Main(string[] args)
        {
            /* Voici le Projet Quizz C# de :
               Cédric
               Ludivine
               Maxime
               Josh

            On va choisir nos 10 questions concernant la connaissances de C#.

            Une agence de recrutement souhaite réaliser de nouveaux tests pour ses candidats afin de vérifier leur connaissance en C# et principalement en application console. Pour cela, elle missionne votre équipe de réaliser un quiz qui répondra à ses besoins.  
            Le quiz devra comporter 10 questions portant sur le langage C#.  
            Les candidats auront le choix entre 4 réponses, 1 seule étant correcte.  
            L'agence de recrutement vous demande de réaliser ce quiz avec une application console qui sera stylisée avec des couleurs, des espacements de texte... tout ce qui pourrait améliorer l'expérience utilisateur. 
            A la fin du quiz, vous devrez afficher un récapitulatif en donnant le score du candidat et les bonnes réponses.  
            Votre équipe pourra faire une proposition plus complète à l'agence de recrutement si vous le souhaitez. Celle-ci tiendra compte de vos efforts.*/
            {
                static void wrongAnswer()
                {
                    Console.BackgroundColor = ConsoleColor.Red;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Black;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Red;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Black;
                    Console.Clear();
                    Thread.Sleep(100);
                }
                static void goodAnswer()
                {
                    Console.BackgroundColor = ConsoleColor.Green;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Black;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Green;
                    Console.Clear();
                    Thread.Sleep(100);
                    Console.BackgroundColor = ConsoleColor.Black;
                    Console.Clear();
                    Thread.Sleep(100);
                }
                string answer = "";
                int score = 0;
                // Question 1 : Pourquoi le nom C# ? (C Sharp)

                Console.WriteLine("Pourquoi le nom C# ? (C Sharp) \r\n\r\n" +
                    "A) Car c'est un C tranchant. \r\n" +
                    "B) Pour profiter de la popularité des hashtags \r\n" +
                    "C) Ca serais l'ajout de ++ au langage C++ \r\n" +
                    "D) La réponse D \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Tu as des envies de meurtre ?");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Et des doubles quotes pendant que tu y es ?");
                }
                else if (answer == "c" || answer == "C")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, car \"C Hashtag\" ça le faisais pas.");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Quel est la couleur du cheval blanc d'Henry IV.");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 2 Quel IDE est utilisé en cours pour coder en C# ? 

                Console.WriteLine("Quel IDE est utilisé en cours pour coder en C# ? \r\n\r\n" +
                    "A) Atom \r\n" +
                    "B) Visual Studio \r\n" +
                    "C) Visual Studio Code \r\n" +
                    "D) Dictée magique \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Presque bon mais tu as oublié que ce n'est pas de l'HTML !!!");
                }
                else if (answer == "b" || answer == "B")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("C'est bien, tu as bien suivi les cours de Jo.");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Et l'histoire de compileur ???");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Alors on manque de maternelle ?");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 3 Pourquoi dit-on que le C# est fortement typé ?

                Console.WriteLine("Pourquoi dit-on que le C# est fortement typé ? \r\n\r\n" +
                    "A) Car il faut préciser le type de variable quand on la déclare \r\n" +
                    "B) Car il n'accepte pas les caractères spéciaux \r\n" +
                    "C) Car c'est un langage orienté objet \r\n" +
                    "D) Car son type est trop fort \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, rien à déclarer.");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Tu vas être jugé pour discrimination.");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Attention aux briques.");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Pas assez de lait dans ton café ?");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 4 Quelles sont les bonnes boucles en C# ?

                Console.WriteLine("Quelles sont les bonnes boucles en C# ? \r\n\r\n" +
                    "A) do...while; while; for; etc... \r\n" +
                    "B) if...else; switch; else if; etc... \r\n" +
                    "C) Console.WriteLine(); Console.ReadLine(); Console.Readkey(); ect... \r\n" +
                    "D) //; /*; */; etc... \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, dou dou di dou...");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Avec des si, on referai le monde.");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("On manque de PS5, d'XBox et de GameCube ???");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("ké ke ta vou lu aicrir ?");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 5 : A quoi sert Parse() ?

                Console.WriteLine("A quoi servent les parse ? \r\n\r\n" +
                    "A) C'est quoi déjà Parse ? \r\n" +
                    "B) A nous casser la tête pour rien. \r\n" +
                    "C) A parsemer des graines de marguerites. \r\n" +
                    "D) A convertir en type string. \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Avais-tu enlever ton casque lors de la formation ?");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Bah biensur...");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("On est pas encore au Printemps.");
                }
                else if (answer == "d" || answer == "D")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, ce ne sont pas des culottes.");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 6 Comment stocker les réponses données par l'utilisateur ?

                Console.WriteLine("Comment stocker les réponses données par l'utilisateur ? \r\n\r\n" +
                    "A) Avec un Console.ReadLine(); \r\n" +
                    "B) Avec HTML \r\n" +
                    "C) En faisant un Ctrl+S \r\n" +
                    "D) Je sais pas moua.... \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, Tu commences à devenir un pro dis donc...");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Ze suis inzénieur informatichien.");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Ton écran ne serait pas plein de blanco ?");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Tu ne sais pas ? Mouaaa non pluuuus.");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 7 Comment déclarer une énumération en C# ?

                Console.WriteLine("Comment déclarer une énumération sur C# ? \r\n\r\n" +
                    "A) Console.ReadLine(); \r\n" +
                    "B) Enumeration \r\n" +
                    "C) enum \r\n" +
                    "D) Console.EnumLine(); \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("A ton avis? tu enum ton propre commentaire ?");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Dommage, il y a quelques lettres en trop...");
                }
                else if (answer == "c" || answer == "C")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, c'est bien. Tu écoutes bien en cours :) ");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Le père de toto a 3 enfants. Pim, Pam et ???");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 8 : Pourquoi les développeurs C# sont ils beaucoup demandés ?

                Console.WriteLine("Pourquoi les développeurs C# sont ils beaucoup demandés ? \r\n\r\n" +
                    "A) Parce que le C# est basé sur le C et a un accès à un grand répertoire de fonctionnalités. \r\n" +
                    "B) Parce que C# est le logiciel de codage le plus puissant et que l'on peux absolument tout programmer. \r\n" +
                    "C) Parce que C# permet de programmer les sites internet à l'aide d'une base de données et ainsi pouvoir faire des applications avec l'aide d'Internet \r\n" +
                    "D) La Mer Noire \r\n");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, prêt à attaquer les bibliothèques ?");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("Tu as un super PC de 2025 ?");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Mais biensur...");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("On manque de Julien Lepers ?");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 9 Pourquoi Microsoft à t'il crée C# ?

                Console.WriteLine("Pourquoi Microsoft à t'il créé C# ? \r\n\r\n" +
                    "A) Parce que Java n'est pas multi-plateforme. \r\n" +
                    "B) Pour pouvoir développer des programmes et applications et des jeux grâce au Framework .NET \r\n" +
                    "C) Parce que Java était devenu trop limités dans la fonctionnalité de ses programmes. \r\n" +
                    "D) Parce que le C et le C++ devenaient trop compliqué pour programmer les applications. ");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Quand on fais la Java, le samedi à Broadway....");
                }
                else if (answer == "b" || answer == "B")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, ça se voit que tu fais de la DOTNET");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Bien tenté, mais ce n'est pas la bonne réponse.");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("On en est pas encore au C+++++++");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question 10 Quelle est la différence entre un Tableau et une List?

                Console.WriteLine("Quelle est la différence entre un Tableau et une List? \r\n\r\n" +
                    "A) Une liste contient des objets mais pas le tableau. \r\n" +
                    "B) Une liste est l'autre nom donné au nombre totale de ligne du tableau. \r\n" +
                    "C) Le tableau est de taille fixe, mais la List est un tableau de taille dynamique. \r\n" +
                    "D) Ah bon ? Il y a une différence ? ");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Va chercher des cubes de construction.");
                }
                else if (answer == "b" || answer == "B")
                {
                    wrongAnswer();
                    Console.WriteLine("C'est pas Excel non plus.");
                }
                else if (answer == "c" || answer == "C")
                {
                    score++;
                    goodAnswer();
                    Console.WriteLine("Bonne réponse, ça tombe bien, j'ai des tables SQL à faire.");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Bah un peu, QUAND MÊME.");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();

                // Question Bonus Que pensez vous de votre chef de projet ?

                Console.WriteLine("Que pensez vous de votre chef de projet? \r\n\r\n" +
                    "A) Au top! tellement bon qu'il a tout fait tout seul \r\n" +
                    "B) Mouaip, ca va , mais peut mieux faire \r\n" +
                    "C) A Eviter \r\n" +
                    "D) AU SECOURS!!!!! A L'AIDE!!!!!!!!!");

                answer = Console.ReadLine();

                if (answer == "a" || answer == "A")
                {
                    wrongAnswer();
                    Console.WriteLine("Faut pas rêver non plus...");
                }
                else if (answer == "b" || answer == "B")
                {
                    goodAnswer();
                    Console.WriteLine("On l'aime bien quand même Josh Boss The Gloss");
                }
                else if (answer == "c" || answer == "C")
                {
                    wrongAnswer();
                    Console.WriteLine("Pas tout à fait, il nous a bien fait rigolé quand même");
                }
                else if (answer == "d" || answer == "D")
                {
                    wrongAnswer();
                    Console.WriteLine("Josh a de la chance , j'ai pensé aux autres classes sinon.... ARGGGRRRRR");
                }
                else
                {
                    wrongAnswer();
                    Console.WriteLine("Cela ne faisait pas parti des réponses.");
                }
                Thread.Sleep(2000);
                Console.Clear();
                Console.WriteLine("Alors, alors... As-tu bien appris en cours ?\r\n" +
                    "Ton score est de : " + score + "/10");
            }
        }
    }
}