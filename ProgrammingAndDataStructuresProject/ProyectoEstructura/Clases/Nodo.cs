using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
    public class Nodo
    {
        public double costo;
        public Nodo sig;
        public Nodo (double c)
        {
            costo = c;
        }
    }
}
