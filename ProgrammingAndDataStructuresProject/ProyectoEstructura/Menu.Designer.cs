namespace ProyectoEstructura
{
    partial class Menu
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Menu));
            this.IngresarP = new System.Windows.Forms.Button();
            this.Ganancias = new System.Windows.Forms.Button();
            this.Bsalir = new System.Windows.Forms.Button();
            this.pictureBox3 = new System.Windows.Forms.PictureBox();
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // IngresarP
            // 
            this.IngresarP.Location = new System.Drawing.Point(143, 12);
            this.IngresarP.Name = "IngresarP";
            this.IngresarP.Size = new System.Drawing.Size(201, 104);
            this.IngresarP.TabIndex = 0;
            this.IngresarP.Text = "Ingresar pedido";
            this.IngresarP.UseVisualStyleBackColor = true;
            this.IngresarP.Click += new System.EventHandler(this.IngresarP_Click);
            // 
            // Ganancias
            // 
            this.Ganancias.Location = new System.Drawing.Point(143, 152);
            this.Ganancias.Name = "Ganancias";
            this.Ganancias.Size = new System.Drawing.Size(201, 88);
            this.Ganancias.TabIndex = 1;
            this.Ganancias.Text = "Ganancias";
            this.Ganancias.UseVisualStyleBackColor = true;
            this.Ganancias.Click += new System.EventHandler(this.Ganancias_Click);
            // 
            // Bsalir
            // 
            this.Bsalir.Location = new System.Drawing.Point(143, 284);
            this.Bsalir.Name = "Bsalir";
            this.Bsalir.Size = new System.Drawing.Size(201, 97);
            this.Bsalir.TabIndex = 2;
            this.Bsalir.Text = "Salir";
            this.Bsalir.UseVisualStyleBackColor = true;
            this.Bsalir.Click += new System.EventHandler(this.Bsalir_Click);
            // 
            // pictureBox3
            // 
            this.pictureBox3.Image = global::ProyectoEstructura.Properties.Resources.error;
            this.pictureBox3.Location = new System.Drawing.Point(38, 284);
            this.pictureBox3.Name = "pictureBox3";
            this.pictureBox3.Size = new System.Drawing.Size(83, 66);
            this.pictureBox3.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox3.TabIndex = 5;
            this.pictureBox3.TabStop = false;
            this.pictureBox3.Click += new System.EventHandler(this.Bsalir_Click);
            // 
            // pictureBox2
            // 
            this.pictureBox2.Image = global::ProyectoEstructura.Properties.Resources.dollar_sign;
            this.pictureBox2.Location = new System.Drawing.Point(38, 162);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(83, 66);
            this.pictureBox2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox2.TabIndex = 4;
            this.pictureBox2.TabStop = false;
            this.pictureBox2.Click += new System.EventHandler(this.Ganancias_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = global::ProyectoEstructura.Properties.Resources.tomar_nota;
            this.pictureBox1.Location = new System.Drawing.Point(38, 26);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(83, 78);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 3;
            this.pictureBox1.TabStop = false;
            this.pictureBox1.Click += new System.EventHandler(this.IngresarP_Click);
            // 
            // Menu
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(476, 403);
            this.Controls.Add(this.pictureBox3);
            this.Controls.Add(this.pictureBox2);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.Bsalir);
            this.Controls.Add(this.Ganancias);
            this.Controls.Add(this.IngresarP);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Menu";
            this.Text = "Menu";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button IngresarP;
        private System.Windows.Forms.Button Ganancias;
        private System.Windows.Forms.Button Bsalir;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.PictureBox pictureBox3;
    }
}