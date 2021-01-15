using System;

namespace exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int number = 0;
            int result;
            string response = "oui";
            while (response != "non")
            {
                Console.WriteLine("La variable number est égal à " + number);
                Console.WriteLine("Choisissez un nombre à additionner :");
                int sum = int.Parse(Console.ReadLine());
                result = number + sum;
                Console.WriteLine(result);
                number = result;
                Console.WriteLine("Voulez vous continuer ?");
                response = Console.ReadLine();
            }
        }
    }
}
