
namespace SchoolVoetbalGokken
{
    partial class Form2
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
            this.login_btn = new System.Windows.Forms.Button();
            this.cancel_btn = new System.Windows.Forms.Button();
            this.email_lbl = new System.Windows.Forms.Label();
            this.password_lbl = new System.Windows.Forms.Label();
            this.email_txb = new System.Windows.Forms.TextBox();
            this.wachtwoord_txb = new System.Windows.Forms.TextBox();
            this.register_btn = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // login_btn
            // 
            this.login_btn.Location = new System.Drawing.Point(247, 223);
            this.login_btn.Name = "login_btn";
            this.login_btn.Size = new System.Drawing.Size(125, 36);
            this.login_btn.TabIndex = 0;
            this.login_btn.Text = "log in";
            this.login_btn.UseVisualStyleBackColor = true;
            this.login_btn.Click += new System.EventHandler(this.login_btn_Click);
            // 
            // cancel_btn
            // 
            this.cancel_btn.Location = new System.Drawing.Point(106, 223);
            this.cancel_btn.Name = "cancel_btn";
            this.cancel_btn.Size = new System.Drawing.Size(93, 36);
            this.cancel_btn.TabIndex = 1;
            this.cancel_btn.Text = "cancel";
            this.cancel_btn.UseVisualStyleBackColor = true;
            this.cancel_btn.Click += new System.EventHandler(this.cancel_btn_Click);
            // 
            // email_lbl
            // 
            this.email_lbl.AutoSize = true;
            this.email_lbl.Location = new System.Drawing.Point(112, 94);
            this.email_lbl.Name = "email_lbl";
            this.email_lbl.Size = new System.Drawing.Size(82, 17);
            this.email_lbl.TabIndex = 2;
            this.email_lbl.Text = "Email adres";
            // 
            // password_lbl
            // 
            this.password_lbl.AutoSize = true;
            this.password_lbl.Location = new System.Drawing.Point(106, 158);
            this.password_lbl.Name = "password_lbl";
            this.password_lbl.Size = new System.Drawing.Size(86, 17);
            this.password_lbl.TabIndex = 3;
            this.password_lbl.Text = "Wachtwoord";
            // 
            // email_txb
            // 
            this.email_txb.Location = new System.Drawing.Point(247, 91);
            this.email_txb.Name = "email_txb";
            this.email_txb.Size = new System.Drawing.Size(203, 22);
            this.email_txb.TabIndex = 4;
            this.email_txb.TextChanged += new System.EventHandler(this.email_txb_TextChanged);
            // 
            // wachtwoord_txb
            // 
            this.wachtwoord_txb.Location = new System.Drawing.Point(247, 155);
            this.wachtwoord_txb.Name = "wachtwoord_txb";
            this.wachtwoord_txb.Size = new System.Drawing.Size(203, 22);
            this.wachtwoord_txb.TabIndex = 5;
            // 
            // register_btn
            // 
            this.register_btn.Location = new System.Drawing.Point(247, 286);
            this.register_btn.Name = "register_btn";
            this.register_btn.Size = new System.Drawing.Size(125, 29);
            this.register_btn.TabIndex = 6;
            this.register_btn.Text = "register";
            this.register_btn.UseVisualStyleBackColor = true;
            this.register_btn.Click += new System.EventHandler(this.register_btn_Click);
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(513, 375);
            this.Controls.Add(this.register_btn);
            this.Controls.Add(this.wachtwoord_txb);
            this.Controls.Add(this.email_txb);
            this.Controls.Add(this.password_lbl);
            this.Controls.Add(this.email_lbl);
            this.Controls.Add(this.cancel_btn);
            this.Controls.Add(this.login_btn);
            this.Name = "Form2";
            this.Text = "Form2";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button login_btn;
        private System.Windows.Forms.Button cancel_btn;
        private System.Windows.Forms.Label email_lbl;
        private System.Windows.Forms.Label password_lbl;
        private System.Windows.Forms.TextBox email_txb;
        private System.Windows.Forms.TextBox wachtwoord_txb;
        private System.Windows.Forms.Button register_btn;
    }
}