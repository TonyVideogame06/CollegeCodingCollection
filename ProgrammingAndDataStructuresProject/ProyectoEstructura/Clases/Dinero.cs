using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
    public class Dinero
    {
        protected Nodo cabeza = null;
        protected Nodo cola = null;
        protected int longitud;
        public Dinero()
        {
        }
        public int lenght()
        {
            return longitud;
        }
        public void Adicionar(double nuevo)
        {
            Nodo nodo = new Nodo(nuevo);
            if (cabeza == null)
            {
                cabeza = nodo;
                cola = nodo;
            }
            else
            {
                cola.sig = nodo;
                cola = nodo;
            }
            longitud++;
        }
        public void extraer(int posicion)
        {
            if (posicion >= 0 && posicion < longitud)
            {
                if (posicion == 0)
                {
                    cabeza = cabeza.sig;

                    if (cabeza == null)
                    {
                        cola = null;
                    }
                }
                else
                {
                    int contador = 0;
                    Nodo cursor = cabeza;

                    while (contador < posicion - 1)
                    {
                        contador++;
                        cursor = cursor.sig;
                    }

                    cursor.sig = cursor.sig.sig;

                    if (cursor.sig == null)
                    {
                        cola = cursor;
                    }
                }

                longitud--;
            }
        }
        public double Obtener(int posicion)
        {
            double a;
            Nodo cursor = cabeza;
            if (posicion >= 0 && posicion < longitud)
            {
                int contador = 0;


                while (contador < posicion)
                {
                    contador++;
                    cursor = cursor.sig;
                }

                a = cursor.costo;
            }
            else
            {
                a = cursor.costo;
            }
            return a;
        }
    }
}

