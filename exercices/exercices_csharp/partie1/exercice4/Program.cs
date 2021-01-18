using System;

namespace exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            string civility = "Monsieur";
            string name = "Vincent";
            int number = 1;
            //Utilisation de littéraux de gabarit dans le message en dessous. $"string {var} string"
            Console.WriteLine($"Bonjour {civility} {name} vous êtes venu nous rendre visite {number} fois.");
        }
    }
}
