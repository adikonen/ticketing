<div class="d-flex justify-content-between">
    <h4>Daftar Type Transportasi</h4>
    <a href="<?= BASE_URL?>/admin/type_transportasi_create" class="btn btn-success">Tambah Type Transportasi</a>
</div>
<div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary font-weight-bold">Daftar Type Transportasi</h6>
    </div>
    <div class="table-responsive p-4">
        <div class="alert alert-primary">
            Berikut merupakan daftar type transportasi dalam sistem
        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Type</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['all_type_transportasi'] as $type_transportasi): ?>
                    <tr>
                        <td><?= $type_transportasi['nama_type']?></td>
                        <td><?= $type_transportasi['keterangan']?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin/type_transportasi_edit/<?= $type_transportasi['id_type_transportasi']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin/type_transportasi_destroy/<?= $type_transportasi['id_type_transportasi']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>