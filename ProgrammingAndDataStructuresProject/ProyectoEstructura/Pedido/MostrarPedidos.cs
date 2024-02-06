using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using ProyectoEstructura.Clases;

namespace ProyectoEstructura
{
    public partial class MostrarPedidos : Form
    {
        ColaPedido pedid;
        public MostrarPedidos(ColaPedido cola)
        {
            InitializeComponent();
            pedid = cola;
            RTBActual.ReadOnly = true;
            RTBSiguiente.ReadOnly = true;
            if (pedid.vacia())
            {
                RTBActual.Text = "no hay pedidos";
                RTBSiguiente.Text = "no hay pedidos";
            }
        }
        private void BSig_Click(object sender, EventArgs e)
        {
            if (!pedid.vacia())
            {
                RTBActual.Text = "";
                Pedidos lista = pedid.extraer();
                for (int i = 0; i < lista.length(); i++)
                {
                    RTBActual.Text += lista.Obtener(i).hamb;
                    if (lista.Obtener(i).papas != 0)
                    {
                        RTBActual.Text += " combo " + lista.Obtener(i).papas;
                        RTBActual.Text += " agua " + lista.Obtener(i).agua;
                    }
                    RTBActual.Text += "\n";
                }
                if (!pedid.vacia())
                {
                    RTBSiguiente.Text = "";
                    for (int m = 0; m < pedid.frente().length(); m++)
                    {
                        RTBSiguiente.Text += pedid.frente().Obtener(m).hamb;
                        if (pedid.frente().Obtener(m).papas != 0)
                        {
                            RTBSiguiente.Text += " combo " + pedid.frente().Obtener(m).papas;
                            RTBSiguiente.Text += " agua " + pedid.frente().Obtener(m).agua;
                        }
                        RTBSiguiente.Text += "\n";

                    }
                }
                else
                {
                    RTBSiguiente.Text = "no hay pedidos";
                }
            }
            else
            {
                RTBActual.Text = "no hay pedidos";
            }
        }

        private void BActualizar_Click(object sender, EventArgs e)
        {
            if (RTBActual.Text == "no hay pedidos")
            {
                if (!pedid.vacia())
                {
                    RTBActual.Text = "";
                    Pedidos lista = pedid.extraer();
                    for (int i = 0; i < lista.length(); i++)
                    {
                        RTBActual.Text += lista.Obtener(i).hamb;
                        if (lista.Obtener(i).papas != 0)
                        {
                            RTBActual.Text += " combo " + lista.Obtener(i).papas;
                            RTBActual.Text += " agua " + lista.Obtener(i).agua;
                        }
                        RTBActual.Text += "\n";
                    }
                    if (!pedid.vacia())
                    {
                        RTBSiguiente.Text = "";
                        for (int m = 0; m < pedid.frente().length(); m++)
                        {
                            RTBSiguiente.Text += pedid.frente().Obtener(m).hamb;
                            if (pedid.frente().Obtener(m).papas != 0)
                            {
                                RTBSiguiente.Text += " combo " + pedid.frente().Obtener(m).papas;
                                RTBSiguiente.Text += " agua " + pedid.frente().Obtener(m).agua;
                            }
                            RTBSiguiente.Text += "\n";

                        }
                    }
                }
                return;
            }
            if (RTBSiguiente.Text == "no hay pedidos")
            {
                if (!pedid.vacia())
                {
                    RTBSiguiente.Text = "";
                    for (int m = 0; m < pedid.frente().length(); m++)
                    {
                        RTBSiguiente.Text += pedid.frente().Obtener(m).hamb;
                        if (pedid.frente().Obtener(m).papas != 0)
                        {
                            RTBSiguiente.Text += " combo " + pedid.frente().Obtener(m).papas;
                            RTBSiguiente.Text += " agua " + pedid.frente().Obtener(m).agua;
                        }
                        RTBSiguiente.Text += "\n";

                    }
                }
            }
        }


        private void Salir_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
