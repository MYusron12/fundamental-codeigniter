<?php
//class home turunan dari ci controller
class Home extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        //fungsi untuk me load
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
