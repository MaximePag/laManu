using System;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = 1;
            for(int i = 1; i < 10; i++)
            {
                Console.WriteLine("Bonjour, je suis le message n°" + num);
                num++;
            }
        }
    }
}
