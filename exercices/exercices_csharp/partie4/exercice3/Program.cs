using System;
using System.Collections.Generic;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            // Créer une liste numbers en utilisant using System.collections.generic
            List<int> numbers = new List<int>() { 69, 96, 42, 3, 9 };
            int count = 1;
            int sum = 0;
            string calc = "";
            Console.WriteLine("Calculer la somme des nombres de la liste \r\n");
            foreach( int number in numbers)
            {
                sum += number;
                if(count == numbers.Count)
                {
                    calc += number;
                }
                else
                {
                    calc += number + " + ";
                }
                count++;
            }
            Console.WriteLine($"{calc} = {sum}");
        }
    }
}
