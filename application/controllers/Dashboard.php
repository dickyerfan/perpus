<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->m_security->getSecurity();
        $isi['content'] = 'v_home';
        $isi['judul'] = 'Dashboard';
        $this->load->model('m_dashboard');
        $isi['anggota'] = $this->m_dashboard->countAnggota();
        $isi['buku'] = $this->m_dashboard->countBuku();
        $isi['pinjam'] = $this->m_dashboard->countPinjam();
        $isi['kembali'] = $this->m_dashboard->countKembali();
        $isi['pengarang'] = $this->m_dashboard->countPengarang();
        $isi['penerbit'] = $this->m_dashboard->countPenerbit();
        $this->load->view('v_dashboard', $isi);
        // $this->load->view('v_menu');
    }
}
