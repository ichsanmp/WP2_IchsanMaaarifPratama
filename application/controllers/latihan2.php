<?php
class latihan2 extends CI_Controller
{
	public function index()
	{
		echo"Selamat datang.. selamat belajar Web Programming";
		//$this->load->view('view_latihan1');
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('model_latihan1');
		$hasil = $this->model_latihan1->jumlah($n1,$n2);
		echo "Hasil penjumlahan dari". $n1 ."+". $n2 ."=" .$hasil;
	}
}