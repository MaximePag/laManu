using System;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Exercice 1");
            int firstNumber = 69;
            int secondNumber = 96;
            int resultNumber = firstNumber + secondNumber;
            Console.WriteLine("Le premier nombre est... " + firstNumber + " Nice!!!");
            Console.WriteLine("Le second nombre est... " + secondNumber + " Meh.");
            Console.WriteLine("L'addition des deux est... " + resultNumber);
            Console.WriteLine(("Ca marche aussi comme ça... ") + (firstNumber + secondNumber));
        }
    }
}