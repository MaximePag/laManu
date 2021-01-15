using System;

namespace exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstNumber;
            firstNumber = Convert.ToInt32(Console.ReadLine());
            int secondNumber;
            secondNumber = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("J'ajoute 33 à ton premier nombre et ça donne : ");
            Console.WriteLine(firstNumber + 33);
            Console.WriteLine("J'incrémente ton deuxieme nombre et ça donne : ");
            secondNumber++;
            Console.WriteLine(secondNumber);
            Console.WriteLine("J'effectue la division du premier nombre par le deuxième nombre. et ça donne : ");
            Console.WriteLine(firstNumber / secondNumber);



        }
    }
}
