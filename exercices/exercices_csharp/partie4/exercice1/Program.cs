using System;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] week = { "Lundi", "Mardi", "Mercredi", "Jedi", "Vendredi", "Samedi" };
            Console.WriteLine("Affichage de l'indice 1 et 4 du tableau week");
            Console.WriteLine(week[1]);
            Console.WriteLine(week[4]);
            Console.WriteLine("Affichage du premier et quatrième élément du tableau week");
            Console.WriteLine(week[0]);
            Console.WriteLine(week[3]);
            Console.WriteLine("Edition du quatrième élément du tableau week");
            week[3] = "Jeudi";
            Console.WriteLine(week[3]);
            Console.WriteLine("Insertion du 7 élément Dimanche dans le tableau newWeek");
            string[] newWeek = { "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche" };
            foreach (string days in newWeek)
            {
                Console.Write(days + " ");
            }
        }
    }
}
