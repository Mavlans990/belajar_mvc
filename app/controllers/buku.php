<?php

class Buku extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman Buku';
        $data['buku'] = $this->model('Buku_model')->getDataBuku();

        $this->view('temp/header', $data);
        $this->view('buku/index', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman Buku';

        $this->view('temp/header', $data);
        $this->view('buku/tambah', $data);
    }
    
    public function tambahData(){
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/buku');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    // Pakain Halaman
    // public function edit($id) 
    // {
    //     $data['judul'] = 'Halaman Buku';
    //     $data['buku'] = $this->model('Buku_model')->getEditDataBuku($id);
        

    //     $this->view('temp/header', $data);
    //     $this->view('buku/edit', $data);
    // }

    public function editData(){
        if ($this->model('Buku_model')->editDataBuku($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    // Aktifkan kalau Pakai Modal
    public function ambilData(){
        echo json_encode($this->model('Buku_model')->getEditDataBuku($_POST['id_buku']));
    }


    public function deleteData($id){
        if ($this->model('Buku_model')->deleteDataBuku($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/buku');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    public function searching(){
        $data['judul'] = 'Halaman Buku';
        $data['buku'] = $this->model('Buku_model')->getDataBukuSearching($_POST['cari_judul']);
        // header('Location: ' . BASEURL . '/buku');
        $this->view('temp/header', $data);
        $this->view('buku/index', $data);
    }
}

?>