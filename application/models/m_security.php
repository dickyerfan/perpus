<?php

class M_security extends CI_Model
{

    public function getSecurity()
    {

        $namauser = $this->session->userdata('namauser');

        if (empty($namauser)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}
