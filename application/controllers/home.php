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
        echo 'Form input';
    }

}

