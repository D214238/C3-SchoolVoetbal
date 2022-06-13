
namespace SchoolVoetbalGokken
{
    partial class Form3
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
            this.team1Lbox = new System.Windows.Forms.ListBox();
            this.GoToBetBtn = new System.Windows.Forms.Button();
            this.KiesTeamTxt = new System.Windows.Forms.Label();
            this.comboBox1 = new System.Windows.Forms.ComboBox();
            this.SuspendLayout();
            // 
            // team1Lbox
            // 
            this.team1Lbox.FormattingEnabled = true;
            this.team1Lbox.ItemHeight = 16;
            this.team1Lbox.Location = new System.Drawing.Point(17, 84);
            this.team1Lbox.Name = "team1Lbox";
            this.team1Lbox.ScrollAlwaysVisible = true;
            this.team1Lbox.Size = new System.Drawing.Size(222, 148);
            this.team1Lbox.TabIndex = 9;
            // 
            // GoToBetBtn
            // 
            this.GoToBetBtn.Location = new System.Drawing.Point(320, 152);
            this.GoToBetBtn.Name = "GoToBetBtn";
            this.GoToBetBtn.Size = new System.Drawing.Size(151, 24);
            this.GoToBetBtn.TabIndex = 11;
            this.GoToBetBtn.Text = "bedrag in vullen";
            this.GoToBetBtn.UseVisualStyleBackColor = true;
            this.GoToBetBtn.Click += new System.EventHandler(this.GoToBetBtn_Click);
            // 
            // KiesTeamTxt
            // 
            this.KiesTeamTxt.AutoSize = true;
            this.KiesTeamTxt.Location = new System.Drawing.Point(14, 43);
            this.KiesTeamTxt.Name = "KiesTeamTxt";
            this.KiesTeamTxt.Size = new System.Drawing.Size(272, 17);
            this.KiesTeamTxt.TabIndex = 12;
            this.KiesTeamTxt.Text = "kies hier uw wedstijd waar u op wilt goken.";
            // 
            // comboBox1
            // 
            this.comboBox1.FormattingEnabled = true;
            this.comboBox1.Location = new System.Drawing.Point(320, 93);
            this.comboBox1.Name = "comboBox1";
            this.comboBox1.Size = new System.Drawing.Size(153, 24);
            this.comboBox1.TabIndex = 13;
            this.comboBox1.SelectedIndexChanged += new System.EventHandler(this.comboBox1_SelectedIndexChanged);
            // 
            // Form3
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(630, 280);
            this.Controls.Add(this.comboBox1);
            this.Controls.Add(this.KiesTeamTxt);
            this.Controls.Add(this.GoToBetBtn);
            this.Controls.Add(this.team1Lbox);
            this.Name = "Form3";
            this.Text = "Form3";
            this.Load += new System.EventHandler(this.Form3_Load_1);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox team1Lbox;
        private System.Windows.Forms.Button GoToBetBtn;
        private System.Windows.Forms.Label KiesTeamTxt;
        private System.Windows.Forms.ComboBox comboBox1;
    }
}