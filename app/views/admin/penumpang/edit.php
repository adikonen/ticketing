<?php $penumpang = $data['penumpang']?>

<h4>Edit penumpang</h4>
<div class="card my-4">
    <div class="card-header">
        <h6 class="text-primary m-0">Penumpang Sistem</h6>
    </div>
    <div class="card-body pt-2 px-4">
        <form action="<?= BASE_URL?>/admin/penumpang_update/<?= $penumpang['id_penumpang']?>" method="post">
            <div class="mt-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $penumpang['username']?>"/>
            </div>
            <div class="mt-2">
                <label for="nama_penumpang" class="form-label">Nama penumpang</label>
                <input type="text" class="form-control" id="nama_penumpang" name="nama_penumpang" value="<?= $penumpang['nama_penumpang']?>"/>
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $penumpang['password']?>"/>
            </div>
            <div class="mt-2">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" value="<?= $penumpang['telefone']?>"/>
            </div>
            <div class="mt-2">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $penumpang['tanggal_lahir']?>"/>
            </div>
            <div class="mt-2">
                <label for="alamat_penumpang" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_penumpang" name="alamat_penumpang" value="<?= $penumpang['alamat_penumpang']?>"/>
            </div>
            <button class="btn btn-success mt-4">Simpan Perubahan</button>
        </form>
    </div>
</div>