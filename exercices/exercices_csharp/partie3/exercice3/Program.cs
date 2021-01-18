using System;

namespace exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int result = 0;
            int firstNumber = 0;
            int secondNumber = 0;
            int sum = 0;
            string response = "oui";
            while (response != "non")
            {
                Console.WriteLine("Choisissez un nombre à additionner :");
                firstNumber = int.Parse(Console.ReadLine());
                Console.WriteLine("Choisissez un deuxième nombre à additionner :");
                secondNumber = int.Parse(Console.ReadLine());                
                if(result == 0)
                {
                    sum = firstNumber + secondNumber;
                    result = sum;
                }
                else
                {
                    result = sum + firstNumber + secondNumber;
                }
                Console.WriteLine(result);
                Console.WriteLine("Voulez vous continuer ?");
                response = Console.ReadLine();
            }
        }
    }
}
