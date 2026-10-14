<h2>Prosedural</h2>

<?php
$nama = "Fulan";

function tampilkanNama($nama) {
    echo $nama;
}

tampilkanNama($nama);

?>

<h2>PBO</h2>

<?php
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        echo $this->nama;
    }
}
$mhs = new Mahasiswa();
$mhs->nama = "Fulan";
$mhs->tampilkanNama();
?>  