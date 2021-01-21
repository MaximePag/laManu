using System;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] week = new string[7]{ "Lundi", "Mardi", "Mercredi", "Jedi", "Vendredi", "Samedi", "" };
            Console.WriteLine("Affichage de l'indice 1 et 4 du tableau week");
            Console.WriteLine(week[1]);
            Console.WriteLine(week[4]);
            Console.WriteLine("Affichage du premier et quatrième élément du tableau week");
            Console.WriteLine(week[0]);
            Console.WriteLine(week[3]);
            Console.WriteLine("Edition du quatrième élément du tableau week");
            week[3] = "Jeudi";
            Console.WriteLine(week[3]);
            week[6] = "Dimanche";
            foreach (string days in week)
            {
                Console.Write(days + " ");
            }
        }
    }
}
