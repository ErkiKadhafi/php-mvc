<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h1>Form Edit Mahasiswa</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <form action="<?= BASEURL ;?>/mahasiswa/edit" method="POST">
            <input type="hidden" name="id" value="<?= $data["id"] ;?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data["daftarMhs"]["nama"] ;?>">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">Nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp" value="<?= $data["daftarMhs"]["nrp"] ;?>"> 
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $data["daftarMhs"]["email"] ;?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $data["daftarMhs"]["jurusan"] ;?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $data["daftarMhs"]["gambar"] ;?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>
    </div>
    
</div>