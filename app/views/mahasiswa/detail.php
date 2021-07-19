<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <img src="<?= BASEURL ;?>/img/<?= $data["daftarMhs"]["gambar"] ;?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data["daftarMhs"]["nama"] ;?></h5>
            <h6 class="card-subtitle mb-2 text-muted">NRP : <?= $data["daftarMhs"]["nrp"] ;?></h6>
            <p class="card-text"><?= $data["daftarMhs"]["email"] ;?></p>
            <p class="card-text"><?= $data["daftarMhs"]["jurusan"] ;?></p>
            <a href="<?= BASEURL ;?>/mahasiswa" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>