using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace WindowsFormsApp1
{
    public partial class Form1: Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        int sayac = 0;
        int dakika = 0;
        int saat = 0;

        private void button1_Click(object sender, EventArgs e)
        {
            timer1.Start();
            button1.Text = "Sürdür";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            listBox1.Items.Add(sayac.ToString() + ":" + dakika.ToString() + ":" + saat.ToString()); 
        }

        private void button3_Click(object sender, EventArgs e)
        {
            timer1.Stop();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            sayac++;
            label3.Text = sayac.ToString();

            if (sayac == 60)
            {
                dakika++;
                label2.Text = dakika.ToString();
                sayac = 0;
            }

            if (dakika == 60)
            {
                saat++;
                label1.Text = saat.ToString();
                dakika = 0;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            listBox1.Items.Remove(listBox1.SelectedItem);
        }

        private void button5_Click(object sender, EventArgs e)
        {
            timer1.Stop();
            sayac = 0;
            dakika = 0;
            saat = 0;
            label1.Text = "00";
            label2.Text = "00";
            label3.Text = "00";
            button1.Text = "Başla!";
            listBox1.Items.Clear();
        }

        int textsaniye = 0;
        int textdakika = 0;
        int textsaat = 0;
        int toplam = 0;

        private void button6_Click(object sender, EventArgs e)
        {
            textsaniye = Convert.ToInt32(textBox1.Text);
            textdakika = Convert.ToInt32(textBox2.Text);
            textsaat = Convert.ToInt32(textBox3.Text);

            label9.Text = textsaat.ToString();
            label10.Text = textdakika.ToString();
            label11.Text = textsaat.ToString();

            timer2.Start();

            textBox1.Text = null;
            textBox2.Text = null;
            textBox3.Text = null;

            button6.Enabled = false;

            toplam = textsaniye + (textdakika * 60) + (textsaat * 3600);
            progressBar1.Maximum = toplam;
            progressBar1.Value = toplam;
        }

        private void timer2_Tick(object sender, EventArgs e)
        {
            textsaniye--;
            label11.Text = textsaniye.ToString();

            toplam--;
            if(toplam != 0)
            {
                progressBar1.Value = toplam;
            }
            else
            {
                progressBar1.Value = 0;
            }

            if(textsaniye == 0)
            {
                if(textdakika != 0)
                {
                    textdakika--;
                    textsaniye = 60;
                    label10.Text = textdakika.ToString();
                }
            }

            if (textdakika == 0)
            {
                if (textsaat != 0)
                {
                    textsaat--;
                    textdakika = 60;
                    label9.Text = textsaat.ToString();
                }
            }

            if(textsaniye == 0 && textdakika == 0 && textsaat == 0)
            {
                timer2.Stop();
                MessageBox.Show("Süreniz Doldu!");
            }
        }

        private void button7_Click(object sender, EventArgs e)
        {
            timer2.Stop();
            button8.Visible = true;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            timer2.Start();
            button8.Visible = false;
        }
    }
}
