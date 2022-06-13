using schoolvoetbal_gokken;
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
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

        }

        public int money = 50, bet = 0;
        public string team1OrTeam2 = "", userGuess = "";



        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                if (!textBox1.Text.Equals(""))
                    bet = int.Parse(textBox1.Text);
                else
                    MessageBox.Show("Vul iets in het textbox.", "leeg Textbox.");

                if (bet <= 4)
                {
                    MessageBox.Show("Uw wed moet hoger als 5 munten zijn.", "niet goede wed");
                    textBox1.Clear();
                }
                if (money <= 0)
                {
                    MessageBox.Show("U heeft niet genoeg geld meer.","te weinig geld");
                }
                else
                {
                    betbtn.Enabled = true;
                }
                
                
            }
            catch
            {
                textBox1.Clear();
                MessageBox.Show("U kan alleen getallen invoeren.", "Error");
            }
           
        }

       

        public void Teams1OrTeam2()
        {
            Random winOrLose = new Random();
            int winLose = winOrLose.Next(1, 3);
            if (winLose.Equals(1))
            {
                // pictureBox1.Image = Properties.Resources.team1;
                userGuess = "Gewonnen";
            }
            else
            {
               // pictureBox1.Image = Properties.Resources.team2;
                userGuess = "Verloren";
            }

        }


        private void betbtn_Click(object sender, EventArgs e)
        {
           
                Teams1OrTeam2();

                if (!userGuess.Equals(team1OrTeam2))
                {
                     textBox1.Clear();MessageBox.Show("U heeft verloren $" + bet + " !", "U heeft verloren");
                    money -= bet;
                    moneylbl.Text = "$" + money.ToString();
                    betbtn.Enabled = true;
                    textBox1.Clear();
                }
                else
                {
                  
                    
                    MessageBox.Show("U heeft gewonnen $" + bet + " !", "U heeft gewonnen !");
                    money += bet;
                    moneylbl.Text = "$" + money.ToString();
                    betbtn.Enabled = false;
                    textBox1.Clear();
            }


            
        }

    }
}





