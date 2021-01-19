using System;

namespace exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Quel âge avez-vous ?");
            int age = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("De quel sexe êtes-vous ? (m ou f)");
            string sex = Console.ReadLine();
            if (age >= 18)
            {
                if(sex == ("m"))
                {
                    Console.WriteLine("Vous êtes un homme et vous avez " + age + "ans, vous êtes donc majeur.e.");
                }
                if(sex == ("f"))
                {
                    Console.WriteLine("Vous êtes une femme et vous avez " + age + "ans, vous êtes donc majeur.e.");
                }
                else
                {
                    Console.WriteLine("Je n'ai pas compris votre sexe mais vous êtes majeur.");
                }
            }
            else
            {
                if (sex == ("m"))
                {
                    Console.WriteLine("Vous êtes un garçon et vous avez " + age + "ans, vous êtes donc mineur.e.");
                }
                if (sex == ("f"))
                {
                    Console.WriteLine("Vous êtes une fille et vous avez " + age + "ans, vous êtes donc mineur.e.");
                }
                else
                {
                    Console.WriteLine("Je n'ai pas compris votre sexe mais vous êtes mineur.");
                }
            }
        }
    }
}

