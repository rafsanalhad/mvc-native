<?php

class About extends Controller{
    public function index($nama = 'Rizky', $pekerjaan = 'Mahasiswa'){
        $data = [
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'judul' => 'About Me'
        ];
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}