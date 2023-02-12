<div class="d-flex justify-content-between">
    <h4>Daftar Petugas</h4>
    <a href="<?= BASE_URL?>/admin/petugas_create" class="btn btn-success">Tambah Petugas</a>
</div>
<div class="card shadow mt-2 mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary font-weight-bold">Daftar Petugas</h6>
    </div>
    <div class="table-responsive p-4">
        <div class="alert alert-primary">
            Berikut merupakan daftar petugas dalam sistem
        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama Petugas</th>
                    <th>Nama Posisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['all_petugas'] as $petugas): ?>
                    <tr>
                        <td><?= $petugas['username'] ?></td>
                        <td><?= $petugas['nama_petugas']?></td>
                        <td><?= $petugas['nama_level']?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin/petugas_edit/<?= $petugas['id_petugas']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin/petugas_destroy/<?= $petugas['id_petugas']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>