<?php

class Kendaraan {
    public $nomorPlat;
    public $merk;
    public $tarifPerHari;
    public $statusSewa;

    public function __construct($nomorPlat, $merk, $tarifPerHari) {
        $this->nomorPlat = $nomorPlat;
        $this->merk = $merk;
        $this->tarifPerHari = $tarifPerHari;
        $this->statusSewa = false;
    }

    public function tampilkanData() {
        $status = $this->statusSewa ? "Sedang Disewa" : "Tersedia";
        echo "Nomor Plat : {$this->nomorPlat}<br>";
        echo "Merk       : {$this->merk}<br>";
        echo "Tarif/Hari : Rp" . number_format($this->tarifPerHari, 0, ',', '.') . "<br>";
        echo "Status     : {$status}<br>";
    }

    public function sewaKendaraan() {
        $this->statusSewa = true;
    }
}

class Pelanggan {
    public $idPelanggan;
    public $nama;
    public $nomorTelepon;

    public function __construct($idPelanggan, $nama, $nomorTelepon) {
        $this->idPelanggan = $idPelanggan;
        $this->nama = $nama;
        $this->nomorTelepon = $nomorTelepon;
    }

    public function tampilkanData() {
        echo "ID Pelanggan : {$this->idPelanggan}<br>";
        echo "Nama         : {$this->nama}<br>";
        echo "No. Telepon  : {$this->nomorTelepon}<br>";
    }

    public function sewaKendaraan($kendaraan) {
        if (!$kendaraan->statusSewa) {
            $kendaraan->sewaKendaraan();
            echo "{$this->nama} berhasil menyewa kendaraan dengan plat {$kendaraan->nomorPlat}.<br>";
        } else {
            echo "Maaf, kendaraan dengan plat {$kendaraan->nomorPlat} sedang tidak tersedia.<br>";
        }
    }
}


$mobil1 = new Kendaraan("AG 1234 BAK", "Xpander", 350000);
$mobil2 = new Kendaraan("S 5678 UAS", "Innova Solar", 300000);


$pelanggan1 = new Pelanggan("P001", "Shani Indira", "081234567890");
$pelanggan2 = new Pelanggan("P002", "Shania Gracia", "089876543210");


echo "<h3>--- Data Kendaraan Awal ---</h3>";
$mobil1->tampilkanData();
echo "<br>";
$mobil2->tampilkanData();

echo "<h3>--- Data Pelanggan ---</h3>";
$pelanggan1->tampilkanData();
echo "<br>";
$pelanggan2->tampilkanData();

echo "<h3>--- Transaksi Sewa ---</h3>";
$pelanggan1->sewaKendaraan($mobil1);

echo "<h3>--- Data Kendaraan Setelah Disewa ---</h3>";
$mobil1->tampilkanData();

?>