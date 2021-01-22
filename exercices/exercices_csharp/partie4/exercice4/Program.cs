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
            string answer = "y";
            while( answer != "n")
            {
                Console.WriteLine("Veuillez ajouter un nombre à la liste :");
                numbers.Add(int.Parse(Console.ReadLine()));
                Console.WriteLine("Voulez vous ajouter un nombre à la liste ? (y/n)");
                answer = Console.ReadLine();
            }

            int count = 1;
            int result = 1;
            string calc = "";
            Console.WriteLine("Calcul du produit des nombres de la liste \r\n");
            foreach (int number in numbers)
            {
                result *= number;
                if (count == numbers.Count)
                {
                    calc += number;
                }
                else
                {
                    calc += number + " x ";
                }
                count++;
            }
            Console.WriteLine($"{calc} = {result}");

            //// Créer une liste numbers en utilisant using System.collections.generic
            //List<int> numbers = new List<int>();
            //string response = "";
            //int number;
            //bool end;
            //do
            //{
            //    Console.WriteLine("\r\nEcrivez un nombre à multiplier. Ecrivez 'stop' si vous voulez arrêter.");
            //    response = Console.ReadLine();
            //    bool isNumber = int.TryParse(response, out number);
            //    if (isNumber)
            //    {
            //        numbers.Add(number);
            //        Console.WriteLine("\r\nJ'ai ajouté " + number + " dans la liste");
            //        end = false;
            //    }
            //    else if ((response == "stop") && (numbers.Count < 2))
            //    {
            //        Console.WriteLine("\r\nIl faut au minimum deux nombres à multiplier.");
            //        end = false;
            //    }
            //    else if (response != "stop")
            //    {
            //        Console.WriteLine("\r\nJe n'ai pas compris.");
            //        end = false;
            //    }
            //    else
            //    {
            //        end = true;
            //    }
            //}
            //while (end == false);
            //int result;
            //int[] numbersArray = numbers.ToArray();
            //Console.WriteLine("\r\nLe résultat de la multiplication est :");
            //for (int i = 0; i < numbersArray.Length - 1; i++)
            //{
            //    Console.WriteLine(numbersArray[i] + " x " + numbersArray[i + 1]);
            //    result = numbersArray[i] * numbersArray[i + 1];
            //    Console.WriteLine(result);
            //    numbersArray[i + 1] = result;
            //}
        }
    }
}
