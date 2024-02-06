using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
    public class Pedidos
    {
        protected int longitud;
        public double costo;
        protected NodoSEC cabeza, cola;
        public Pedidos()
        {
            this.longitud = 0;
            this.cabeza = null;
            this.cola = null;
        }

        public void Adicionar(comida nuevo)
        {
            NodoSEC nodo = new NodoSEC(nuevo);
            if (cabeza == null)
            {
                cabeza = nodo;
                cola = nodo;
            }
            else
            {
                cola.Siguiente = nodo;
                cola = nodo;
            }
            longitud++;
        }

        public comida Obtener(int posicion)
        {
            comida a;
            NodoSEC cursor = cabeza;
            if (posicion >= 0 && posicion < longitud)
            {
                int contador = 0;


                while (contador < posicion)
                {
                    contador++;
                    cursor = cursor.Siguiente;
                }

                a = cursor.Dato;
            }
            else
            {
                a = cursor.Dato;
            }
            return a;
        }
        public void Eliminar(int posicion)
        {
            if (posicion >= 0 && posicion < longitud)
            {
                if (posicion == 0)
                {
                    cabeza = cabeza.Siguiente;

                    if (cabeza == null)
                    {
                        cola = null;
                    }
                }
                else
                {
                    int contador = 0;
                    NodoSEC cursor = cabeza;

                    while (contador < posicion - 1)
                    {
                        contador++;
                        cursor = cursor.Siguiente;
                    }

                    cursor.Siguiente = cursor.Siguiente.Siguiente;

                    if (cursor.Siguiente == null)
                    {
                        cola = cursor;
                    }
                }

                longitud--;
            }
        }
        public int length()
        {
            return longitud;
        }
        public void vaciar()
        {
            cabeza = null;
            longitud = 0;
            costo = 0;
        }
        public void copia(Pedidos acopiar)
        {
            cabeza = acopiar.cabeza;
            longitud = acopiar.length();
            costo = acopiar.costo;
        }
        public void suma()
        {
            double acum = 0;
            for (int i = 0; i < longitud; i++)
            {
                acum += Obtener(i).costo;
            }
            costo = acum;
        }
    }
}
