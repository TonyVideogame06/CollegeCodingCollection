using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;
using ProyectoEstructura.Clases;

namespace ProyectoEstructura
{

    static class Program
    {
        /// <summary>
        /// Punto de entrada principal para la aplicación.
        /// </summary>
        [STAThread]
        
        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            Login login = new Login();            
            if (login.ShowDialog() == DialogResult.OK)
            {
                Application.Run(new Menu());
            }
            else
                MessageBox.Show("Gracias por usar la aplicacion de TI's Food");
        }
        
    }    
}
