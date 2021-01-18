using System;

namespace exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            int number = random.Next(0, 100);
            int response = 0;
            int trys = 0;
            while (response != 42)
            {
                Console.WriteLine("Devine le nombre secret entre 0 et 100");
                response = int.Parse(Console.ReadLine());
                if (response < number)
                {
                    Console.WriteLine("Non c'est plus grand");
                    trys++;
                }
                else if (response > number)
                {
                    Console.WriteLine("Non c'est plus petit");
                    trys++;
                }
                else if (response == number)
                {
                    Console.WriteLine("Bravo !!!!!");
                    trys++;
                    Console.WriteLine("Tu as réussi au bout de " + trys + " tentatives.");
                }
            }
        }
    }
}
