using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProyectoEstructura.Clases
{
     public class ColaPedido
    {
        protected NodoSEP delante;
        protected NodoSEP atras;
        public void Adicionar(Pedidos nuevo)
        {
            NodoSEP nodo = new NodoSEP(nuevo);
            if (delante == null)
            {
                delante = nodo;
                atras = nodo;
            }
            else
            {
                atras.Siguiente=nodo;
                atras = nodo;
            }
        }
        public Pedidos frente()
        {
            return delante.Dato;
        }
        public Pedidos fondo()
        {
            return atras.Dato;
        }
        public Pedidos extraer()
        {
            Pedidos regresa = delante.Dato;
            delante = delante.Siguiente;
            return regresa;
        }
        public bool vacia()
        {
            if (delante == null)
                return true;
            else
                return false;
        }
    }
}
