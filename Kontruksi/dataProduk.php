<?php
class Produk {

    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stok, $diskon = 0)
 {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function hitungHargadiskon() {
        $potongan = $this->harga * ($this->diskon / 100);
        return $this->harga - $potongan;
    }

    public function hitungNilaiStok() {
        return $this->hitungHargadiskon() * $this->stok;
    }

    public function tampilkanData(){

        echo "<h3>Data Produk</h3>";

        echo "Kode Produk : ".$this->kode . "<br>";
        echo "Nama Produk : ".$this->nama . "<br>";
        echo "Harga Produk : Rp." . number_format($this->harga, 0, ',', '.') . "<br>";

        if ($this->diskon > 0) {
            echo "Diskon : ".$this->diskon . "%<br>";
            echo "Harga Setelah Diskon : Rp." . number_format($this->hitungHargadiskon(), 0, ',', '.') . "<br>";
        } else {
            echo "Diskon : Tidak ada<br>";
        }

        echo "Jumlah Stok : ".$this->stok . "<br>";
        echo "Total Nilai Stok : ".$this->hitungNilaiStok() . "<br>";
    }
}
$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    18,
    10
);

$produk2 = new Produk(
    "P002",
    "Mouse",
    150000,
    25
);

$produk1->tampilkanData();
echo"<br>";
$produk2->tampilkanData();

?>