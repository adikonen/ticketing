<div class="d-flex justify-content-between">
    <h4>Daftar rute</h4>
    <a href="<?= BASE_URL?>/admin/rute_create" class="btn btn-success">Tambah rute</a>
</div>
<div class="card shadow mt-2 mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary font-weight-bold">Daftar rute</h6>
    </div>
    <div class="table-responsive p-4">
        <div class="alert alert-primary">
            Berikut merupakan daftar rute dalam sistem
        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Tujuan</th>
                    <th>Rute Awal</th>
                    <th>Rute Akhir</th>
                    <th>Harga</th>
                    <th>Kode Transportasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['all_rute'] as $rute): ?>
                    <tr>
                        <td><?= $rute['tujuan']?></td>
                        <td><?= $rute['rute_awal']?></td>
                        <td><?= $rute['rute_ahkir']?></td>
                        <td><?= $rute['harga']?></td>
                        <td><?= $rute['kode']?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin/rute_edit/<?= $rute['id_rute']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin/rute_destroy/<?= $rute['id_rute']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>