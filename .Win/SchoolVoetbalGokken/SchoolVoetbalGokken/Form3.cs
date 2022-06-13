using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Net.WebRequestMethods;

namespace SchoolVoetbalGokken
{
    public partial class Form3 : Form
    {
        public Form3()
        {
            InitializeComponent();
            fetchArray();
        }


        private void Form3_Load_1(object sender, EventArgs e)
        {
            fetchArray();
            team1Lbox.Items.Clear();
            foreach (var m in games)
            {
                string team1 = m.team_1;
                team1Lbox.Items.Add(m);
            }

            comboBox1.Items.Add("Wint");
            comboBox1.Items.Add("Verliest");
            comboBox1.Items.Add("Speelt gelijk");
        }
       

        List<Games> games;

        public void fetchArray()
        {
            // Set the URL
            string url = "http://schoolvoetbal.test/api";
            string output = "";
            using (WebClient wc = new WebClient())
            {
                output = wc.DownloadString(url);
            }
            games = JsonConvert.DeserializeObject<List<Games>>(output);
        }

        private void team1Lbox_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void GoToBetBtn_Click(object sender, EventArgs e)
        {
            {
                Form Form1 = new Form1();
                Form1.Show();
                this.Hide();
            }
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
}


        
    

