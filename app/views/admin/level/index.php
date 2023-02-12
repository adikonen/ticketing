<div class="d-flex justify-content-between">
    <h4>Daftar Level</h4>
</div>
<div class="card shadow mt-2 mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary font-weight-bold">Daftar Level</h6>
    </div>
    <div class="table-responsive p-4">
        <div class="alert alert-primary">
            Berikut merupakan daftar level dalam sistem
        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Level</th>
                    <th>Nama Level</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['all_level'] as $level): ?>
                    <tr>
                        <td><?= $level['id_level'] ?></td>
                        <td><?= $level['nama_level']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>