<?php

require 'connection.php';

$petugas_level_view = 'CREATE OR REPLACE VIEW petugas_level_view AS 
    SELECT petugas.*, level.nama_level FROM petugas INNER JOIN level ON petugas.id_level = level.id_level
';

$rute_transportasi_view = 'CREATE OR REPLACE VIEW rute_transportasi_view AS 
    SELECT rute.*, transportasi.jumlah_kursi, transportasi.keterangan, transportasi.kode FROM rute
    INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi
';

$views = [$petugas_level_view, $rute_transportasi_view];

foreach ($views as $view) {
    $connection->query($view);
}

echo "berhasil membuat views! \n";