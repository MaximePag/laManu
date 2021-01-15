using System;

namespace exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Entrez votre identifiant");
            string login = Console.ReadLine();
            Console.WriteLine("Entrez votre mot de passe");
            string password = Console.ReadLine();
            switch (login)
            {
                case "maxpag":
                    switch (password)
                    {
                        case "gneugneu":
                            Console.WriteLine("Bienvenu à la Manu");
                            break;
                        default:
                            Console.WriteLine("Identifiant ou mot de passe incorrect");
                            break;
                    }
                    break;
                default:
                    Console.WriteLine("Identifiant ou mot de passe incorrect");
                    break;
            }
        }
    }
}
