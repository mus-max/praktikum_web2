<?php
class Produk {

    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct(
        $kode,
        $nama,
        $harga,
        $stok
    ) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function tampilkanData() {

        echo "<h3>Data Produk</h3>";

        echo "Kode: " . $this->kode . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        
        echo "Nilai Stok: Rp " . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
    }
}

$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    10
);

$produk2 = new Produk(
    "P002",
    "Mouse",
    150000,
    25
);

$produk1->tampilkanData();
echo "<hr>";
$produk2->tampilkanData();
?>