using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace MusteriSiparisUygulamasi
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnSonraki_Click(object sender, EventArgs e)
        {
            tabControl1.SelectedIndex++;
        }

        private void btnOnceki_Click(object sender, EventArgs e)
        {
            tabControl1.SelectedIndex--;
        }

        private void tabControl1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (tabControl1.SelectedIndex == 0)
                btnOnceki.Enabled = false;
            else btnOnceki.Enabled = true;
            //************************************************
            if (tabControl1.SelectedIndex == tabControl1.TabPages.Count - 1)
                btnSonraki.Enabled = false;
            else btnSonraki.Enabled = true;
        }

        private void btnKaydet_Click(object sender, EventArgs e)
        {
            string satir = txtAdSoyad.Text + ";" + txtTel.Text + ";" + txtAdres.Text + ";";

            File.WriteAllLines(txtTel.Text + ".data", new string[] { satir });

            MessageBox.Show("Veriler kayıt edildi!");
        }

        private void btnGetir_Click(object sender, EventArgs e)
        {
            if (File.Exists(txtTel.Text + ".data"))
            {
                string[] satirlar = File.ReadAllLines(txtTel.Text + ".data");

                string musteriBilgileri = satirlar[0];

                string[] data = musteriBilgileri.Split(';');

                txtAdSoyad.Text = data[0];
                txtTel.Text = data[1];
                txtAdres.Text = data[2];
            }
            else
                MessageBox.Show("Müşteri bulunamadı!");
        }
    }
}
