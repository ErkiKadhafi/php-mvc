<?php 
    class Mahasiswa_model{
        // private $mhs = [
        //     [
        //         "nama" => "michael alexander",
        //         "nrp" => "05111940000050",
        //         "email" => "michael.alexander@gmail.com",
        //         "jurusan" => "Teknik material"
        //     ],
        //     [
        //         "nama" => "tipat cantok",
        //         "nrp" => "05111940000113",
        //         "email" => "tipat.cantok@gmail.com",
        //         "jurusan" => "Teknik informatika"
        //     ],
        //     [
        //         "nama" => "budi setyawan",
        //         "nrp" => "05111940000061",
        //         "email" => "budi.setyawan@gmail.com",
        //         "jurusan" => "Teknik industri"
        //     ]
        // ];
        
        private $table = "mahasiswa";
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getMhs(){
            $this->db->query("SELECT * FROM " . $this->table);
            return $this->db->resultSet();
        }

        public function getMhsById($id){
            $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
            $this->db->bind("id", $id);
            return $this->db->single();
        }
        
        public function hapusData($id){
            $this->db->query("DELETE FROM mahasiswa WHERE id=:id");
            $this->db->bind("id", $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function tambahData($data){
            $query = "INSERT INTO " . $this->table . 
                        " VALUES ('', :nama, :nrp, :email, :jurusan, :gambar)";

            $this->db->query($query);
            $this->db->bind("nama", $data["nama"]);
            $this->db->bind("nrp", $data["nrp"]);
            $this->db->bind("email", $data["email"]);
            $this->db->bind("jurusan", $data["jurusan"]);
            $this->db->bind("gambar", $data["gambar"]);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function editData($data){
            $query = "UPDATE " . $this->table . " SET 
                    nama=:nama, 
                    nrp=:nrp, 
                    email=:email, 
                    jurusan=:jurusan,
                    gambar=:gambar WHERE id=:id";

            $this->db->query($query);
            $this->db->bind("id", $data["id"]);
            $this->db->bind("nama", $data["nama"]);
            $this->db->bind("nrp", $data["nrp"]);
            $this->db->bind("email", $data["email"]);
            $this->db->bind("jurusan", $data["jurusan"]);
            $this->db->bind("gambar", $data["gambar"]);

            $this->db->execute();

            return $this->db->rowCount();
        }

    }

?>