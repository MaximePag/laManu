using System;

namespace exercice5
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Entrez votre prénom puis votre nom.");
            string firstName = Console.ReadLine();
            string lastName = Console.ReadLine();
            Console.WriteLine("Bonjour " + lastName + " " + firstName + ", nous sommes le jour date mois, comment allez-vous ?");
        }
    }
}
