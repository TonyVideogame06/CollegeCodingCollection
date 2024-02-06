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
    public partial class LoginGanancia : Form
    {
        Dinero total;
        public LoginGanancia(Dinero tot)
        {
            InitializeComponent();
            total = tot;
        }
        
        private void BCerrar_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
            this.Close();
        }
        private void TBCPedidos_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == Convert.ToChar(Keys.Enter))
            {
                if (TBCPedidos.Text == "admin")
                {
                    this.DialogResult = DialogResult.OK;
                    this.Close();
                    Ganancias gan = new Ganancias(total);
                    gan.Show();
                }
                else
                {
                    MessageBox.Show("Contraseña invalida.", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    TBCPedidos.Text = null;
                }

            }
        }

        private void BEntrarP_Click(object sender, EventArgs e)
        {
            if (TBCPedidos.Text == "admin")
            {
                this.DialogResult = DialogResult.OK;
                this.Close();
                Ganancias gan = new Ganancias(total);
                gan.Show();
            }
            else
            {
                MessageBox.Show("Contraseña invalida.", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
                TBCPedidos.Text = null;
            }
        }
    }
}
