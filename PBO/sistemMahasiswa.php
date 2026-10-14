<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

$mhs = new Mahasiswa();
$mhs->nim = "202457201000";
$mhs->nama = "Fulan Sulaiman";
$mhs->prodi = "Sistem Informasi";
$mhs->nilai = 85;

$mhs->tampilkanData();
?>