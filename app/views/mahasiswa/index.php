<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Mahasiswa
            </button>

            <h1>Daftar Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach($data["daftarMhs"] as $row) :?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $row["nama"] ;?>
                        <div>
                            <a href="<?= BASEURL ;?>/mahasiswa/hapus/<?= $row["id"] ;?>" class="badge bg-danger"
                            onclick="return confirm('Yakin lur?');">delete</a>
                            <a href="<?= BASEURL ;?>/mahasiswa/edit_form/<?= $row["id"] ;?>" class="badge bg-warning">ubah</a>
                            <a href="<?= BASEURL ;?>/mahasiswa/detail/<?= $row["id"] ;?>" class="badge bg-primary">detail</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>    

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= BASEURL ;?>/mahasiswa/tambah" method="POST">
         <div class="modal-body">
        
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">Nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Tambah data</button>
        </div>
    </form>

    </div>
  </div>
</div>