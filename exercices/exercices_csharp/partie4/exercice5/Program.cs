using System;
using System.Collections.Generic;
using System.Collections.Specialized;

namespace exercice5
{
    class Program
    {
        static void Main(string[] args)
        {
            string[,] fujita = {
                { "F0", "Dégâts légers : certains dommages sont subis par les cheminées, les antennes de télévision, les bardeaux, les arbres, les enseignes et les fenêtres.\r\n" },
                { "F1", "Dégâts modérés: les automobiles sont renversées, les abris pour automobiles détruits et les arbres déracinés.\r\n"},
                { "F2", "Dégâts importants : les toits sont arrachés par le vent, les hangars et les dépendances sont démolies et les maisons mobiles sont renversées.\r\n"},
                { "F3", "Dégâts considérables: les murs extérieurs et les toits sont projetés dans les airs, les maisons et les bâtiments de métal s'effondrent ou subissent des dégâts importants, les forêts et les récoltes sont abattues.\r\n"},
                { "F4", "Dégâts dévastateurs : même dans les habitations solides, l'essentiel des murs, sinon tous, s'effondrent; tels des missiles, de gros objets en acier ou en béton sont projetés à grandes distances.\r\n"},
                { "F5", "Dégâts incroyables : les maisons sont rasées ou projetées sur de grandes distances. Les tornades F5 peuvent causer des dommages très importants à de grosses structures telles que les écoles et les motels et peuvent arracher les murs extérieurs et les toits (parfois surnommé « le doigt de Dieu ».\r\n" }
            };
            Console.WriteLine("Choississez un type de tornade");
            int number;
            string response = Console.ReadLine();
            bool isNumber = int.TryParse(response, out number);
            if (isNumber)
            {
                Console.WriteLine("Description des tornades de type : " + fujita[number, 0]);
                Console.WriteLine(fujita[number, 1]);
            }
            else
            {
                Console.WriteLine("Ce n'est pas un type de tornades.");
            }
        }
    }
}
