<?php 
    class Mahasiswa extends Controller{

        public function index(){
            $data["judul"] = "Daftar Mahasiswa";
            $data["daftarMhs"] = $this->model("Mahasiswa_model")->getMhs();
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/footer");
        }

        public function detail($id){
            $data["judul"] = "Detail Mahasiswa";
            $data["daftarMhs"] = $this->model("Mahasiswa_model")->getMhsById($id);
            $this->view("templates/header", $data);
            $this->view("mahasiswa/detail", $data);
            $this->view("templates/footer");
        }

        public function hapus($id){
            if($this->model("Mahasiswa_model")->hapusData($id) > 0){
                Flasher::setFlash("berhasil", "dihapus", "success");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }else{             
                Flasher::setFlash("gagal", "dihapus", "danger");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }
        }

        public function tambah(){
            if($this->model("Mahasiswa_model")->tambahData($_POST) > 0){
                Flasher::setFlash("berhasil", "ditambahkan", "success");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }else{
                Flasher::setFlash("gagal", "ditambahkan", "danger");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }
        }

        public function edit_form($id){
            $data["judul"] = "Edit mahasiswa";
            $data["daftarMhs"] = $this->model("Mahasiswa_model")->getMhsById($id);
            $data["id"] = $id;
            $this->view("templates/header", $data);
            $this->view("mahasiswa/edit", $data);
            $this->view("templates/footer");
        }

        public function edit(){
            // var_dump($_POST); die;
            if($this->model("Mahasiswa_model")->editData($_POST) > 0){
                Flasher::setFlash("berhasil", "diedit", "success");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }else{
                Flasher::setFlash("gagal", "diedit", "danger");
                header("Location:" . BASEURL . "/mahasiswa");
                exit;
            }
        }
    }
?>