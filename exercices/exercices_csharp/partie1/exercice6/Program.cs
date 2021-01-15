using System;

namespace exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Bonjour ! Entrez votre Nom puis votre Prénom et enfin votre Âge.");
            string lastName = Console.ReadLine();
            string firstName = Console.ReadLine();
            int age = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Fiche de renseignement");
            Console.WriteLine("Nom : " + lastName);
            Console.WriteLine("Prénom : " + firstName);
            Console.WriteLine("Age : " + age + "ans");
        }
    }
}
