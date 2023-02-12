<div class="d-flex justify-content-between">
    <h4>Daftar penumpang</h4>
    <a href="<?= BASE_URL?>/admin/penumpang_create" class="btn btn-success">Tambah penumpang</a>
</div>
<div class="card shadow mt-2 mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary font-weight-bold">Daftar penumpang</h6>
    </div>
    <div class="table-responsive p-4">
        <div class="alert alert-primary">
            Berikut merupakan daftar penumpang dalam sistem
        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama penumpang</th>
                    <th>Telefone</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['all_penumpang'] as $penumpang): ?>
                    <tr>
                        <td><?= $penumpang['username'] ?></td>
                        <td><?= $penumpang['nama_penumpang']?></td>
                        <td><?= $penumpang['telefone']?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin/penumpang_edit/<?= $penumpang['id_penumpang']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin/penumpang_destroy/<?= $penumpang['id_penumpang']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>