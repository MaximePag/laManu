using System;

namespace exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Quel âge avez-vous ?");
            string age = Console.ReadLine();
            int verifyAge;
            bool isNumber = int.TryParse(age, out verifyAge);
            if (isNumber)
            {
                if ((verifyAge >= 18) && (verifyAge <= 130))
                {
                    Console.WriteLine("Vous avez " + age + "ans, vous êtes donc majeur.e.");
                }
                else if ((verifyAge < 18) && (verifyAge > 0))
                {
                    Console.WriteLine("Vous avez " + age + "ans, vous êtes donc mineur.e.");
                }
                else
                {
                    Console.WriteLine("Ce n'est pas possible.");
                }
            }
            else
            {
                Console.WriteLine("Âge invalide, veuillez écrire un nombre.");
            }
        }
    }
}
