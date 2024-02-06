
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
    public partial class MenuPedido : Form
    {
      
        ColaPedido pedid;
        string comi = "";
        double precio;
        Pedidos Lista = new Pedidos();
        Dinero total;
        public MenuPedido(ColaPedido cola, Dinero tot)
        {
            InitializeComponent();
            pedid = cola;           
            total = tot;
        }
        private void BCarne1_Click(object sender, EventArgs e)
        {
            comi = BCarne1.Text;
            precio = 55;
        }

        private void BPollo_Click(object sender, EventArgs e)
        {
            comi = BPollo.Text;
            precio = 85;
        }

        private void BCarne2_Click(object sender, EventArgs e)
        {
            comi = BCarne2.Text;
            precio = 75;
        }

        private void BCarne3_Click(object sender, EventArgs e)
        {
            comi = BCarne3.Text;
            precio = 95;
        }

        private void Binfantil_Click(object sender, EventArgs e)
        {
            comi = Binfantil.Text;
            precio = 75;
        }

        private void BNUggets_Click(object sender, EventArgs e)
        {
            comi = BNUggets.Text;
            precio = 75;
        }

        private void BEnsalada_Click(object sender, EventArgs e)
        {
            comi = BEnsalada.Text;
            precio = 70;
        }

        private void BPescado_Click(object sender, EventArgs e)
        {
            comi = BPescado.Text;
            precio = 90;
        }

        private void BTocino_Click(object sender, EventArgs e)
        {
            comi = BTocino.Text;
            precio = 100;
        }
        private void CBCombo_CheckedChanged(object sender, EventArgs e)
        {
            if (CBCombo.Checked)
            {
                GBPapas.Visible = true;
                GBRefrescos.Visible = true;
            }
        }

        private void BCorte_Click(object sender, EventArgs e)
        {
            this.Close();
            LoginGanancia corte = new LoginGanancia(total);
            corte.ShowDialog();
        }

        private void BComida_Click(object sender, EventArgs e)
        {
            if (comi != "")
            {
                comida Orden = new comida();
                Orden.hamb = comi;
                if (CBCombo.Checked)
                {
                    if (RBPequeñas.Checked)
                    {
                        Orden.papas = 1;
                        precio += 15;
                    }
                    if (RBGrandes.Checked)
                    {
                        Orden.papas = 3;
                        precio += 25;
                    }
                    else
                    {
                        Orden.papas = 2;
                        precio += 30;
                    }
                    Orden.agua = LBBebida.SelectedItem.ToString();
                }
                Orden.costo = precio;
                Lista.Adicionar(Orden);
                    comi = "";
                    CBCombo.Checked = false;
                GBPapas.Visible = false;
                GBRefrescos.Visible = false;
                RBGrandes.Checked = false;
                RBMedianas.Checked = false;
                RBPequeñas.Checked = false;
                LBBebida.SelectedIndex = -1;
                
            }
            else
            {
                MessageBox.Show("Opcion invalida. Debe ingresar primero una comida", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void BPedido_Click(object sender, EventArgs e)
        {
            if (comi != "")
            {
                comida Orden = new comida();
                Orden.hamb = comi;
                if (CBCombo.Checked)
                {
                    if (RBPequeñas.Checked)
                    {
                        Orden.papas = 1;
                        precio += 15;
                    }
                    if (RBGrandes.Checked)
                    {
                        Orden.papas = 3;
                        precio += 25;
                    }
                    else
                    {
                        Orden.papas = 2;
                        precio += 30;
                    }
                    Orden.agua = LBBebida.SelectedItem.ToString();
                }
                Orden.costo = precio;
                Lista.Adicionar(Orden);
                Pedidos NUEVA = new Pedidos();
                Lista.suma();
                NUEVA.copia(Lista);
                Lista.vaciar();
                total.Adicionar(NUEVA.costo);
                pedid.Adicionar(NUEVA);
                comi = "";
                CBCombo.Checked = false;
                GBPapas.Visible = false;
                GBRefrescos.Visible = false;
                RBGrandes.Checked = false;
                RBMedianas.Checked = false;
                RBPequeñas.Checked = false;
                LBBebida.SelectedIndex = -1;
            }
            else
            {
                if (Lista.length() == 0)
                {
                    MessageBox.Show("Opcion invalida. Debe ingresar primero una comida", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
                else
                {
                    Pedidos NUEVA = new Pedidos();
                    Lista.suma();
                    NUEVA.copia(Lista);
                    Lista.vaciar();
                    total.Adicionar(NUEVA.costo);
                    pedid.Adicionar(NUEVA);
                    pedid.Adicionar(Lista);
                    comi = "";
                    CBCombo.Checked = false;
                    GBPapas.Visible = false;
                    GBRefrescos.Visible = false;
                    RBGrandes.Checked = false;
                    RBMedianas.Checked = false;
                    RBPequeñas.Checked = false;
                    LBBebida.SelectedIndex = -1;
                }

            }
        }

        private void MenuPedido_Load(object sender, EventArgs e)
        {
            MostrarPedidos rt = new MostrarPedidos(pedid);
            rt.Show();
        }

        private void Ipapag_Click(object sender, EventArgs e)
        {
            RBGrandes.Checked = true;
        }

        private void Ipapam_Click(object sender, EventArgs e)
        {
            RBMedianas.Checked = true;
        }

        private void Ipapap_Click(object sender, EventArgs e)
        {
            RBPequeñas.Checked = true;
        }

        private void Icola_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 0;
        }

        private void Imanzana_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 1;
        }

        private void Itoronja_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 2;
        }

        private void Inaranja_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 3;
        }

        private void Ilimon_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 4;
        }

        private void Iagua_Click(object sender, EventArgs e)
        {
            LBBebida.SelectedIndex = 5;
        }

        private void Salir_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
