<?php
// Create tabungan
class Tabungan {
    public $tambah, $ambil, $saldo;

    public function getTambah(){
        return $this->tambah + $this->saldo;
    }
    public function getAmbil(){
        return $this->ambil - $this->tambah;
    }
    public function cekSaldo(){
        return $this->saldo;
    } 
}
$tabungan = new Tabungan();
$tabungan->tambah=1000000;
$tabungan->ambil=1000000;
$tabungan->saldo=1000000;

echo $tabungan->getTambah();
echo "<hr>";
echo $tabungan->getAmbil();
echo "<hr>";
echo $tabungan->cekSaldo();
?>