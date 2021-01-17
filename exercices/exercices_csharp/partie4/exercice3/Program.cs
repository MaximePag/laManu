using System;
using System.Collections.Generic;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            // Créer une liste numbers en utilisant using System.collections.generic
            List<int> numbers = new List<int>();
            numbers.Add(69);
            numbers.Add(96);
            numbers.Add(42);
            numbers.Add(3);
            numbers.Add(9);
            int sum;
            Console.WriteLine("Calculer la somme des nombres de la liste \r\n");
            for(int i = 0; i < numbers.Count - 1; i++)
            {
                Console.WriteLine(numbers[i] + " + " + numbers[i + 1]);
                sum = numbers[i] + numbers[i + 1];
                Console.WriteLine(sum);
                numbers[i + 1] = sum;
            }
        }
    }
}
