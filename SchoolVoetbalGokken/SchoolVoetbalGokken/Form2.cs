using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SchoolVoetbalGokken
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void login_btn_Click(object sender, EventArgs e)
        {
                if(email_txb.Text == "kees@plop.nl")
                
                {
                if (wachtwoord_txb.Text == "Geheim123")
                
                {
                    Form Form3 = new Form3();
                    Form3.Show();
                    this.Hide();
                }

                else
                {
                    MessageBox.Show("voer de goede gegevens in");
                }


                }
                if (email_txb.Text == "admin")
                 {
                if (wachtwoord_txb.Text == "admin")
                { 
                    Form Form3 = new Form3();
                    Form3.Show();
                    this.Hide();
                }
                else
                {
                    MessageBox.Show("voer de goede gegevens in");
                }

            }
        }

        private void cancel_btn_Click(object sender, EventArgs e)
        {
            System.Windows.Forms.Application.ExitThread( ); 
        }

        private void register_btn_Click(object sender, EventArgs e)
        {
            System.Windows.Forms.MessageBox.Show("U heeft een account aangemaakt.");
        }

        private void email_txb_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
