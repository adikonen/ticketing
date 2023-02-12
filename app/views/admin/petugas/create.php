<div class="card my-4">
    <div class="card-header">
        <h6 class="text-primary m-0">Petugas Sistem</h6>
    </div>
    <div class="card-body pt-2 px-4">
        <form action="<?= BASE_URL?>/admin/petugas_store" method="post">
            <div class="mt-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"/>
            </div>
            <div class="mt-2">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas"/>
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"/>
            </div>
            <button class="btn btn-success mt-4">Simpan Petugas</button>
        </form>
    </div>
</div>