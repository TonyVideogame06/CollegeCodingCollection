using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
    public class NodoSEC
    {
        protected comida dato;
        protected NodoSEC siguiente;
        public NodoSEC(comida d)
        {
            dato = d;
            this.siguiente = null;
        }
        public NodoSEC(comida d, NodoSEC siguiente)
        {
            dato = d;
            this.siguiente = siguiente;
        }

        public comida Dato
        {
            set { dato = value; }
            get { return dato; }
        }

        public NodoSEC Siguiente
        {
            get { return siguiente; }
            set { siguiente = value; }
        }

    }
}
