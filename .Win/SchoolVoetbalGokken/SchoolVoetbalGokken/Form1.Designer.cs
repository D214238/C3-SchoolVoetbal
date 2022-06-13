
namespace SchoolVoetbalGokken
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
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
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.bettingbtn = new System.Windows.Forms.Button();
            this.betbtn = new System.Windows.Forms.Button();
            this.textBox1 = new System.Windows.Forms.TextBox();
            this.moneylbl = new System.Windows.Forms.Label();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // bettingbtn
            // 
            this.bettingbtn.Location = new System.Drawing.Point(116, 205);
            this.bettingbtn.Name = "bettingbtn";
            this.bettingbtn.Size = new System.Drawing.Size(185, 25);
            this.bettingbtn.TabIndex = 0;
            this.bettingbtn.Text = "plaats je weddenschap";
            this.bettingbtn.UseVisualStyleBackColor = true;
            this.bettingbtn.Click += new System.EventHandler(this.button1_Click);
            // 
            // betbtn
            // 
            this.betbtn.Location = new System.Drawing.Point(167, 255);
            this.betbtn.Name = "betbtn";
            this.betbtn.Size = new System.Drawing.Size(83, 25);
            this.betbtn.TabIndex = 2;
            this.betbtn.Text = "wed";
            this.betbtn.UseVisualStyleBackColor = true;
            this.betbtn.Click += new System.EventHandler(this.betbtn_Click);
            // 
            // textBox1
            // 
            this.textBox1.Location = new System.Drawing.Point(116, 148);
            this.textBox1.Name = "textBox1";
            this.textBox1.Size = new System.Drawing.Size(185, 25);
            this.textBox1.TabIndex = 5;
            // 
            // moneylbl
            // 
            this.moneylbl.AutoSize = true;
            this.moneylbl.Location = new System.Drawing.Point(167, 118);
            this.moneylbl.Name = "moneylbl";
            this.moneylbl.Size = new System.Drawing.Size(87, 17);
            this.moneylbl.TabIndex = 6;
            this.moneylbl.Text = "50 4S munten";
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(334, 104);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(289, 197);
            this.pictureBox1.TabIndex = 7;
            this.pictureBox1.TabStop = false;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 17F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(677, 374);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.moneylbl);
            this.Controls.Add(this.textBox1);
            this.Controls.Add(this.betbtn);
            this.Controls.Add(this.bettingbtn);
            this.Name = "Form1";
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button bettingbtn;
        private System.Windows.Forms.Button betbtn;
        private System.Windows.Forms.TextBox textBox1;
        private System.Windows.Forms.Label moneylbl;
        private System.Windows.Forms.PictureBox pictureBox1;
    }
}

