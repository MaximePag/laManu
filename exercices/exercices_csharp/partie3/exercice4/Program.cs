using System;

namespace exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int number = 42;
            int response = 0;
            while (response != 42)
            {
                Console.WriteLine("Devine le nombre secret entre 0 et 50");
                response = int.Parse(Console.ReadLine());
                if (response < number)
                {
                    Console.WriteLine("Non c'est plus grand");
                }
                else if (response > number)
                {
                    Console.WriteLine("Non c'est plus petit");
                }
                else if (response == number)
                {
                    Console.WriteLine("Bravo !!!!!");
                }
            }
        }
    }
}
