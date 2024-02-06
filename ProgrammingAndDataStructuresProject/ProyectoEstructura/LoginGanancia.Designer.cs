namespace ProyectoEstructura
{
    partial class LoginGanancia
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(LoginGanancia));
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.bCerrar = new System.Windows.Forms.Button();
            this.lContraseña = new System.Windows.Forms.Label();
            this.lPedido = new System.Windows.Forms.Label();
            this.TBCPedidos = new System.Windows.Forms.TextBox();
            this.BEntrarP = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.None;
            this.pictureBox1.Image = global::ProyectoEstructura.Properties.Resources.logo;
            this.pictureBox1.Location = new System.Drawing.Point(496, 41);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(119, 95);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 20;
            this.pictureBox1.TabStop = false;
            // 
            // bCerrar
            // 
            this.bCerrar.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bCerrar.Location = new System.Drawing.Point(401, 175);
            this.bCerrar.Margin = new System.Windows.Forms.Padding(4);
            this.bCerrar.Name = "bCerrar";
            this.bCerrar.Size = new System.Drawing.Size(117, 32);
            this.bCerrar.TabIndex = 19;
            this.bCerrar.Text = "Cerrar";
            this.bCerrar.UseVisualStyleBackColor = true;
            this.bCerrar.Click += new System.EventHandler(this.BCerrar_Click);
            // 
            // lContraseña
            // 
            this.lContraseña.AutoSize = true;
            this.lContraseña.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lContraseña.Location = new System.Drawing.Point(78, 106);
            this.lContraseña.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lContraseña.Name = "lContraseña";
            this.lContraseña.Size = new System.Drawing.Size(112, 23);
            this.lContraseña.TabIndex = 18;
            this.lContraseña.Text = "Contraseña";
            // 
            // lPedido
            // 
            this.lPedido.AutoSize = true;
            this.lPedido.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lPedido.Location = new System.Drawing.Point(280, 68);
            this.lPedido.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lPedido.Name = "lPedido";
            this.lPedido.Size = new System.Drawing.Size(129, 23);
            this.lPedido.TabIndex = 17;
            this.lPedido.Text = "Corte de caja";
            // 
            // TBCPedidos
            // 
            this.TBCPedidos.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.TBCPedidos.Location = new System.Drawing.Point(230, 106);
            this.TBCPedidos.Margin = new System.Windows.Forms.Padding(4);
            this.TBCPedidos.Name = "TBCPedidos";
            this.TBCPedidos.PasswordChar = '*';
            this.TBCPedidos.Size = new System.Drawing.Size(201, 30);
            this.TBCPedidos.TabIndex = 16;
            this.TBCPedidos.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.TBCPedidos_KeyPress);
            // 
            // BEntrarP
            // 
            this.BEntrarP.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BEntrarP.Location = new System.Drawing.Point(129, 175);
            this.BEntrarP.Margin = new System.Windows.Forms.Padding(4);
            this.BEntrarP.Name = "BEntrarP";
            this.BEntrarP.Size = new System.Drawing.Size(117, 32);
            this.BEntrarP.TabIndex = 15;
            this.BEntrarP.Text = "Entrar";
            this.BEntrarP.UseVisualStyleBackColor = true;
            this.BEntrarP.Click += new System.EventHandler(this.BEntrarP_Click);
            this.BEntrarP.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.TBCPedidos_KeyPress);
            // 
            // LoginGanancia
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(678, 249);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.bCerrar);
            this.Controls.Add(this.lContraseña);
            this.Controls.Add(this.lPedido);
            this.Controls.Add(this.TBCPedidos);
            this.Controls.Add(this.BEntrarP);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "LoginGanancia";
            this.Text = "LoginGanancia";
            this.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.TBCPedidos_KeyPress);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Button bCerrar;
        private System.Windows.Forms.Label lContraseña;
        private System.Windows.Forms.Label lPedido;
        private System.Windows.Forms.TextBox TBCPedidos;
        private System.Windows.Forms.Button BEntrarP;
    }
}