namespace ProyectoEstructura
{
    partial class Ganancias
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
            this.label1 = new System.Windows.Forms.Label();
            this.RTBCorte = new System.Windows.Forms.RichTextBox();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(27, 6);
            this.label1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(122, 17);
            this.label1.TabIndex = 3;
            this.label1.Text = "Ganancias del dia";
            // 
            // RTBCorte
            // 
            this.RTBCorte.Location = new System.Drawing.Point(31, 40);
            this.RTBCorte.Margin = new System.Windows.Forms.Padding(4);
            this.RTBCorte.Name = "RTBCorte";
            this.RTBCorte.Size = new System.Drawing.Size(311, 402);
            this.RTBCorte.TabIndex = 2;
            this.RTBCorte.Text = "";
            // 
            // Ganancias
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(370, 455);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.RTBCorte);
            this.Name = "Ganancias";
            this.Text = "MostrarPedidos";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.RichTextBox RTBCorte;
    }
}