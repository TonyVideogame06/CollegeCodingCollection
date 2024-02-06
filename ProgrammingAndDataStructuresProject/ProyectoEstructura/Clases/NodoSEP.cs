using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
    public class NodoSEP
    {
        protected Pedidos dato;
        protected NodoSEP siguiente;
        public NodoSEP(Pedidos dato)
        {
            this.dato = dato;
            this.siguiente = null;
        }
        public NodoSEP(Pedidos dato, NodoSEP siguiente)
        {
            this.dato = dato;
            this.siguiente = siguiente;
        }

        public Pedidos Dato
        {
            get { return dato; }
            set { dato = value; }
        }

        public NodoSEP Siguiente
        {
            get { return siguiente; }
            set { siguiente = value; }
        }
    }
}
