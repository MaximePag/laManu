using System;

namespace exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(week.Lundi);
            Console.WriteLine(week.Mardi);
            Console.WriteLine(week.Mercredi);
            Console.WriteLine(week.Jeudi);
            Console.WriteLine(week.Vendredi);
            Console.WriteLine(week.Samedi);
            Console.WriteLine(week.Dimanche);
            Console.WriteLine("\r\n" + (week)4);
        }
        public enum week
        {
            Lundi,
            Mardi,
            Mercredi,
            Jeudi,
            Vendredi,
            Samedi,
            Dimanche
        }
    }
}
