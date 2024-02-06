namespace ProyectoEstructura
{
    partial class MostrarPedidos
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(MostrarPedidos));
            this.BActualizar = new System.Windows.Forms.Button();
            this.BSig = new System.Windows.Forms.Button();
            this.RTBSiguiente = new System.Windows.Forms.RichTextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.RTBActual = new System.Windows.Forms.RichTextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.BSalir = new System.Windows.Forms.Button();
            this.Iactualizar = new System.Windows.Forms.PictureBox();
            this.Isig = new System.Windows.Forms.PictureBox();
            this.Isalir = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.Iactualizar)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.Isig)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.Isalir)).BeginInit();
            this.SuspendLayout();
            // 
            // BActualizar
            // 
            this.BActualizar.Location = new System.Drawing.Point(124, 394);
            this.BActualizar.Margin = new System.Windows.Forms.Padding(4);
            this.BActualizar.Name = "BActualizar";
            this.BActualizar.Size = new System.Drawing.Size(100, 28);
            this.BActualizar.TabIndex = 11;
            this.BActualizar.Text = "Actualizar";
            this.BActualizar.UseVisualStyleBackColor = true;
            this.BActualizar.Click += new System.EventHandler(this.BActualizar_Click);
            // 
            // BSig
            // 
            this.BSig.Location = new System.Drawing.Point(321, 394);
            this.BSig.Margin = new System.Windows.Forms.Padding(4);
            this.BSig.Name = "BSig";
            this.BSig.Size = new System.Drawing.Size(100, 28);
            this.BSig.TabIndex = 10;
            this.BSig.Text = "Siguiente";
            this.BSig.UseVisualStyleBackColor = true;
            this.BSig.Click += new System.EventHandler(this.BSig_Click);
            // 
            // RTBSiguiente
            // 
            this.RTBSiguiente.Location = new System.Drawing.Point(124, 245);
            this.RTBSiguiente.Margin = new System.Windows.Forms.Padding(4);
            this.RTBSiguiente.Name = "RTBSiguiente";
            this.RTBSiguiente.Size = new System.Drawing.Size(411, 117);
            this.RTBSiguiente.TabIndex = 9;
            this.RTBSiguiente.Text = "";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(129, 213);
            this.label2.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(113, 17);
            this.label2.TabIndex = 8;
            this.label2.Text = "Pedido siguiente";
            // 
            // RTBActual
            // 
            this.RTBActual.Location = new System.Drawing.Point(124, 59);
            this.RTBActual.Margin = new System.Windows.Forms.Padding(4);
            this.RTBActual.Name = "RTBActual";
            this.RTBActual.Size = new System.Drawing.Size(411, 117);
            this.RTBActual.TabIndex = 7;
            this.RTBActual.Text = "";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(129, 28);
            this.label1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(127, 17);
            this.label1.TabIndex = 6;
            this.label1.Text = "Pedido en proceso";
            // 
            // BSalir
            // 
            this.BSalir.Location = new System.Drawing.Point(534, 394);
            this.BSalir.Margin = new System.Windows.Forms.Padding(4);
            this.BSalir.Name = "BSalir";
            this.BSalir.Size = new System.Drawing.Size(100, 28);
            this.BSalir.TabIndex = 48;
            this.BSalir.Text = "Salir";
            this.BSalir.UseVisualStyleBackColor = true;
            this.BSalir.Click += new System.EventHandler(this.Salir_Click);
            // 
            // Iactualizar
            // 
            this.Iactualizar.Image = ((System.Drawing.Image)(resources.GetObject("Iactualizar.Image")));
            this.Iactualizar.Location = new System.Drawing.Point(54, 382);
            this.Iactualizar.Name = "Iactualizar";
            this.Iactualizar.Size = new System.Drawing.Size(63, 55);
            this.Iactualizar.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.Iactualizar.TabIndex = 49;
            this.Iactualizar.TabStop = false;
            this.Iactualizar.Click += new System.EventHandler(this.BActualizar_Click);
            // 
            // Isig
            // 
            this.Isig.Image = ((System.Drawing.Image)(resources.GetObject("Isig.Image")));
            this.Isig.Location = new System.Drawing.Point(240, 382);
            this.Isig.Name = "Isig";
            this.Isig.Size = new System.Drawing.Size(63, 55);
            this.Isig.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.Isig.TabIndex = 50;
            this.Isig.TabStop = false;
            this.Isig.Click += new System.EventHandler(this.BSig_Click);
            // 
            // Isalir
            // 
            this.Isalir.Image = ((System.Drawing.Image)(resources.GetObject("Isalir.Image")));
            this.Isalir.Location = new System.Drawing.Point(447, 382);
            this.Isalir.Name = "Isalir";
            this.Isalir.Size = new System.Drawing.Size(63, 55);
            this.Isalir.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.Isalir.TabIndex = 51;
            this.Isalir.TabStop = false;
            this.Isalir.Click += new System.EventHandler(this.Salir_Click);
            // 
            // MostrarPedidos
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(676, 480);
            this.Controls.Add(this.Isalir);
            this.Controls.Add(this.Isig);
            this.Controls.Add(this.Iactualizar);
            this.Controls.Add(this.BSalir);
            this.Controls.Add(this.BActualizar);
            this.Controls.Add(this.BSig);
            this.Controls.Add(this.RTBSiguiente);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.RTBActual);
            this.Controls.Add(this.label1);
            this.Name = "MostrarPedidos";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterParent;
            this.Text = "MostrarPedidos";
            ((System.ComponentModel.ISupportInitialize)(this.Iactualizar)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.Isig)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.Isalir)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button BActualizar;
        private System.Windows.Forms.Button BSig;
        private System.Windows.Forms.RichTextBox RTBSiguiente;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.RichTextBox RTBActual;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button BSalir;
        private System.Windows.Forms.PictureBox Iactualizar;
        private System.Windows.Forms.PictureBox Isig;
        private System.Windows.Forms.PictureBox Isalir;
    }
}