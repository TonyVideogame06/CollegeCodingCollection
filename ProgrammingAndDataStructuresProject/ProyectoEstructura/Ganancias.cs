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
    public partial class Ganancias : Form
    {
        public Ganancias()
        {
            InitializeComponent();
        }
        Dinero total = new Dinero();
        public Ganancias(Dinero tot)
        {
            InitializeComponent();
            double tt=0;
            total = tot;
            RTBCorte.ReadOnly = true;
            for (int i = 0; i < tot.lenght(); i++)
            {
                RTBCorte.Text += (i + 1) + "\t" + total.Obtener(i) + "\n";
                tt += total.Obtener(i);
            }
            RTBCorte.Text += "---------------------------\n"+"La ganancia total del dia es\t"+tt;

        }
    }
}
