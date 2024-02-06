using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProyectoEstructura
{
    public partial class Login : Form
    {
        Menu menu = new Menu();
        public Login()
        {
            InitializeComponent();
        }
            // el Form 2 es el del pedido
            //form 4 es el corte
            

            private void BCerrar_Click(object sender, EventArgs e)
            {
                this.DialogResult = DialogResult.Cancel;
                this.Close();
            }
            private void TBCPedidos_KeyPress(object sender, KeyPressEventArgs e)
            {
                if (e.KeyChar == Convert.ToChar(Keys.Enter))
                {
                    if (TBCPedidos.Text == "tifood")
                    {
                        this.DialogResult = DialogResult.OK;
                    this.Close();
                    }
                    else
                    {
                        MessageBox.Show("Contraseña invalida.", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    }
                   
                }
            }

        private void BEntrarP_Click(object sender, EventArgs e)
        {
            if (TBCPedidos.Text == "tifood")
            {
                this.DialogResult = DialogResult.OK;               
                this.Close();

            }
            else
            {
                MessageBox.Show("Contraseña invalida.", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}

