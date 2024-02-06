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

    public partial class Menu : Form
    {
        ColaPedido pedid = new ColaPedido();
        Dinero total = new Dinero();
        public Menu()
        {
            InitializeComponent();
        }

        private void IngresarP_Click(object sender, EventArgs e)
        {
            MenuPedido menuPedido = new MenuPedido(pedid, total);
            menuPedido.Show();
        }

        private void Ganancias_Click(object sender, EventArgs e)
        {
            LoginGanancia ganancia = new LoginGanancia(total);
            ganancia.Show();
        }

        private void Bsalir_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
