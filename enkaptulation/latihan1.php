<?php
class Mahasiswa {
    public $nama;       
    private $nilai;     
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Andi";  
echo $mhs1->nama;

$mhs1->nilai = 90;
?>
