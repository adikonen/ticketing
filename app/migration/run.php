<?php

require "connection.php";

$penumpang = "CREATE TABLE penumpang (
    id_penumpang int not null primary key auto_increment not null,
    username varchar(255) not null,
    password varchar(255) not null,
    nama_penumpang varchar(255) not null,
    alamat_penumpang text not null,
    tanggal_lahir date not null,
    jenis_kelamin enum('laki-laki', 'perempuan') not null,
    telefone varchar(50) not null
)";

$petugas = "CREATE TABLE petugas (
    id_petugas int not null primary key auto_increment not null,
    username varchar(255) not null,
    password varchar(255) not null,
    nama_petugas varchar(255) not null,
    id_level int not null
)";

$transportasi = "CREATE TABLE transportasi (
    id_transportasi int not null primary key auto_increment ,
    kode varchar(100) not null,
    jumlah_kursi varchar(255) not null,
    keterangan text not null, 
    id_type_transportasi int not null
)";

$rute = "CREATE TABLE rute (
    id_rute int primary key auto_increment not null,
    tujuan varchar(255) not null,
    rute_awal varchar(255) not null,
    rute_ahkir varchar(255) not null,
    harga int not null,
    id_transportasi int not null
)";

$pemesanan = "CREATE TABLE pemesanan (
    id_pemesananan int not null primary key auto_increment not null,
    kode_pemesanan varchar(100) not null,
    tanggal_pemesanan date not null,
    tempat_pemesanan varchar(255) not null,
    id_pelanggan int not null,
    kode_kursi varchar(100),
    id_rute int not null,
    tujuan text not null,
    tanggal_berangkat date not null,
    jam_cekin datetime not null,
    jam_berangkat datetime not null,
    total_bayar int not null,
    id_petugas int not null    
)";

$type_transportasi = "CREATE TABLE type_transportasi (
    id_type_transportasi int not null primary key auto_increment not null,
    nama_type varchar(255) not null,
    keterangan text not null
)";

$level = "CREATE TABLE level (
   id_level int primary key auto_increment not null, 
   nama_level varchar(255) not null
)";

$tables = [$penumpang, $petugas, $transportasi, $rute, $type_transportasi, $pemesanan, $level];

foreach ($tables as $insert_syntax) {
    $connection->query($insert_syntax);
}

$relasi_pemesanan = "ALTER TABLE pemesanan
    ADD FOREIGN KEY (id_petugas) REFERENCES petugas(id_petugas),
    ADD FOREIGN KEY (id_pelanggan) REFERENCES penumpang(id_penumpang),
    ADD FOREIGN KEY (id_rute) REFERENCES rute(id_rute);
";
$relasi_rute = "ALTER TABLE rute
    ADD FOREIGN KEY (id_transportasi) REFERENCES transportasi(id_transportasi);
";
$relasi_tansportasi = "ALTER TABLE transportasi
    ADD FOREIGN KEY (id_type_transportasi) REFERENCES type_transportasi(id_type_transportasi);
";
$relasi_petugas = "ALTER TABLE petugas
    ADD FOREIGN KEY (id_level) REFERENCES level(id_level);
";

$relations = [$relasi_pemesanan, $relasi_tansportasi, $relasi_petugas, $relasi_rute];

foreach ($relations as $relasi) {
    $connection->query($relasi);
}

echo "Berhasil membuat table!";