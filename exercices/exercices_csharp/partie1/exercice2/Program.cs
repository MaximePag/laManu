using System;

namespace exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstNumber = 69;
            int secondNumber = 96;
            int thirdNumber = 42;
            Console.WriteLine("Le premier nombre est : " + firstNumber);
            Console.WriteLine("Le second nombre est : " + secondNumber);
            Console.WriteLine("Le troisieme nombre est : " + thirdNumber);
            Console.WriteLine(("Le résultat du calcul est : ") + ((firstNumber + secondNumber) * (thirdNumber)));
        }
    }
}
