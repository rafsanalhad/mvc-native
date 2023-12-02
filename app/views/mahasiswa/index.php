<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nrp']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'];?>" data-id="<?= $mhs['id'];?>" class="editData">edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>">Detail</a>
                    <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>">Hapus</a>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="container-mt-3">
    <div class="h3 formModalLabel">Form Tambah Data</div>
    <form action="<?= BASEURL;?>/mahasiswa/tambah" class="form" method="post">
        <input type="hidden" name="id" id="id">
        <label for="" class="form-label">Nama</label>
        <input type="text" name="nama" id="namaData" class="form-control">
        <label for="" class="form-label">NRP</label>
        <input type="text" name="nrp" id="nrpData" class="form-control">
        <label for="" class="form-label">Email</label>
        <input type="text" name="email" id="emailData" class="form-control">
        <label for="" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" id="jurusanData" class="form-control">
        <input type="submit" value="simpan">
    </form>
</div>