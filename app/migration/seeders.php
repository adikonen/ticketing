<?php

require "connection.php";

$penumpang = "INSERT INTO penumpang (username,password,nama_penumpang,alamat_penumpang,tanggal_lahir,jenis_kelamin,telefone) VALUES
    ('konen', 'konen123','adikonen','jalan rumah jalan', '2005-06-18', 'laki-laki', '089887665443'),
    ('palguna','palguna123','palguna','jalan jalan', '2005-07-10', 'laki-laki', '089334556778'),
    ('nanayo','nanayo123','nanayo','jalan jalann', '2004-07-10', 'laki-laki', '089334556848')
";

$level = "INSERT INTO level (nama_level) VALUES ('admin'), ('petugas'), ('operator')";

$petugas = "INSERT INTO petugas (username, password, nama_petugas, id_level) VALUES 
    ('petugas1','petugas1', 'petugas1', 1),
    ('petugas2', 'petugas2','petugas2',2),
    ('petugas2', 'petugas2','petugas2',3)
";

$tipe_transportasi = "INSERT INTO type_transportasi (nama_type, keterangan) VALUES
    ('Elite','Khusus ELITE GLOBAL'),
    ('Regular','biasa ajah'),
    ('KING','KING NI')
";

$transportasi = "INSERT INTO transportasi (kode, jumlah_kursi, keterangan, id_type_transportasi) VALUES
    ('A1','200','bis biasa',1),
    ('A2','100','bis kecil',2),
    ('A3','500','bis mewah',3)
";

$rute = "INSERT INTO rute (tujuan, rute_awal, rute_ahkir, harga, id_transportasi) VALUES
    ('Jogja','Denpasar','Banyuwangi','2200000',1),
    ('Bandung','Denpasar','Banyuwangi','1200000',2),
    ('Surga','Bumi','Langit','999999999',3)
";

$pemesanan = "INSERT INTO pemesanan (kode_pemesanan, tanggal_pemesanan, tempat_pemesanan, id_pelanggan, kode_kursi, id_rute, tujuan, tanggal_berangkat, jam_cekin, jam_berangkat, total_bayar, id_petugas) VALUES
    ('001','2023-06-18','denpasar',1,'A1',1,'Jogja','2023-07-18','2023-01-23 21:21:00','2023-01-23 21:22:00','2200000',1),
    ('002','2023-06-19','denpasar',2,'A2',2,'Bandung','2023-07-19','2023-01-24 21:21:00','2023-01-24 21:22:00','1200000',2),
    ('003','2023-06-20','Bumi',3,'A3',3,'Surga','2023-07-20','2023-01-25 21:21:00','2023-01-25 21:22:00','999999999',3)
";

$seeders = [$penumpang, $level, $petugas, $tipe_transportasi, $transportasi, $rute, $pemesanan];

foreach ($seeders as $seed) {
    $connection->query($seed);
}

echo "Berhasil seeding";