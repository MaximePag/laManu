using System;
using System.Collections.Generic;

namespace exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            // Créer une liste languages en utilisant using System.collections.generic
            List<string> languages = new List<string>();
            languages.Add("HTML");
            languages.Add("CSS");
            languages.Add("Javacrit");
            languages.Add("Jquery");
            languages.Add("PHP");
            languages.Add("BootStrap");
            languages.Add("Java");
            Console.WriteLine("Parcourir la liste avec la boucle for-each: \r\n");
            foreach (string language in languages)
            {
                Console.WriteLine(language);
            }
            Console.WriteLine("\r\n Afficher le 4ème élément de la liste.");
            Console.WriteLine(languages[3]);
            Console.WriteLine("\r\n Afficher le 4ème index de la liste.");
            Console.WriteLine(languages[4]);
            Console.WriteLine("\r\n Supprimer Bootstrap de la liste.");
            languages.Remove("BootStrap");
            foreach (string language in languages)
            {
                Console.WriteLine(language);
            }
            Console.WriteLine("\r\n Modification de Javacrit en Javascript");
            languages[2] = "Javascript";
            Console.WriteLine(languages[2]);
            Console.WriteLine("\r\n Ajouter C dans la liste");
            languages.Add("C");
            foreach (string language in languages)
            {
                Console.WriteLine(language);
            }

        }
    }
}
