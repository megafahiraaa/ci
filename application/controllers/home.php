<?php 

class home extends CI_Controller{

    public function index()
    {
        echo 'Belajar web Framework' ;
    }


    public function tampil()
    {
        return $this->load->view('v_tampil');
    }

    public function form()
    {
        return $this->load->view('v_form');
    }
    public function mahasiswa()
    {
        return $this->load->view('v_mahasiswa');
    }

}

