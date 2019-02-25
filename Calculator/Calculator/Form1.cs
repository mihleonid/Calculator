using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculator
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void panel3_Paint(object sender, PaintEventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox1.Text += "well";
        }

        private void button3_Click(object sender, EventArgs e)
        {
            textBox1.Text += "ret";
        }

        private void button13_Click(object sender, EventArgs e)
        {
            textBox1.Text += "+";
        }

        private void button14_Click(object sender, EventArgs e)
        {
            textBox1.Text += "-";
        }

        private void button15_Click(object sender, EventArgs e)
        {
            textBox1.Text += "*";
        }

        private void button16_Click(object sender, EventArgs e)
        {
            textBox1.Text += "/";
        }

        private void button17_Click(object sender, EventArgs e)
        {
            textBox1.Text += "1";
        }

        private void button18_Click(object sender, EventArgs e)
        {
            textBox1.Text += "2";
        }

        private void button19_Click(object sender, EventArgs e)
        {
            textBox1.Text += "3";
        }

        private void button20_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
        }

        private void button10_Click(object sender, EventArgs e)
        {
            textBox1.Text += "^";
        }

        private void button21_Click(object sender, EventArgs e)
        {
            textBox1.Text += "4";
        }

        private void button22_Click(object sender, EventArgs e)
        {
            textBox1.Text += "5";
        }

        private void button23_Click(object sender, EventArgs e)
        {
            textBox1.Text += "6";
        }

        private void button7_Click(object sender, EventArgs e)
        {
            textBox1.Text += "prst";
        }

        private void button11_Click(object sender, EventArgs e)
        {
            textBox1.Text += "!";
        }

        private void button25_Click(object sender, EventArgs e)
        {
            textBox1.Text += "7";
        }

        private void button26_Click(object sender, EventArgs e)
        {
            textBox1.Text += "8";
        }

        private void button27_Click(object sender, EventArgs e)
        {
            textBox1.Text += "9";
        }

        private void button28_Click(object sender, EventArgs e)
        {
            textBox1.Text += ".";
        }

        private void button5_Click(object sender, EventArgs e)
        {
            textBox1.Text += "[";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            textBox1.Text += "]";
        }

        private void button12_Click(object sender, EventArgs e)
        {
            textBox1.Text += ":";
        }

        private void button29_Click(object sender, EventArgs e)
        {
            textBox1.Text += "0";
        }

        private void button4_Click(object sender, EventArgs e)
        {
            textBox1.Text = "10^" + textBox1.Text;
        }

        private void notifyIcon1_MouseDoubleClick(object sender, MouseEventArgs e)
        {

        }

        private void button30_Click(object sender, EventArgs e)
        {
            if (textBox1.Text.IndexOf("ret") != -1) {
                
            }
            notifyIcon1.ShowBalloonTip(8);
        }
    }
}
