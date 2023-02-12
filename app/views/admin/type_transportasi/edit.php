<?php $type_transportasi = $data['type_transportasi']?>

<h4>Edit Type Transportasi</h4>
<div class="card my-4">
    <div class="card-header">
        <h6 class="text-primary m-0">Type transportasi Sistem</h6>
    </div>
    <div class="card-body pt-2 px-4">
        <form action="<?= BASE_URL?>/admin/type_transportasi_update/<?= $type_transportasi['id_type_transportasi']?>" method="post">
            <div class="mt-2">
                <label for="nama_type" class="form-label">Nama Type</label>
                <input type="text" class="form-control" id="nama_type" name="nama_type" value="<?= $type_transportasi['nama_type']?>"/>
            </div>
            <div class="mt-2">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $type_transportasi['keterangan']?>"/>
            </div>
            <button class="btn btn-success mt-4">Simpan Perubahan</button>
        </form>
    </div>
</div>