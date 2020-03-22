<?php

class Bilangan extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Bilangan Prima';
        $this->load->view('templates/header',$data);
        $this->load->view('bilangan/index',$data);
        $this->load->view('templates/footer');


    }
}

