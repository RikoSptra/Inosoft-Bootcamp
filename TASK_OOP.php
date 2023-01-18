<?php

class bangundatar
{
    public float $jarijari = 0;
    public float $sisipersegi = 0;
    public float $panjang = 0;
    public float $lebar = 0;

    public function arealingkaran(float $jarijari)
    {
        echo "Luas lingkaran = " . (3.14 * $jarijari * $jarijari) .PHP_EOL;
    }
    
    public function circumlingkaran(float $jarijari)
    {
        echo "Keliling lingkaran = " . (2 * 3.14 * $jarijari) .PHP_EOL;
    }
    public function enlargelingkaran(float $jarijari)
    {
        echo "ukuran besar = " . ($jarijari * 10) .PHP_EOL;
    }
    public function delargelingkaran(float $jarijari)
    {
        echo "ukuran kecil = " . ($jarijari / 10) .PHP_EOL;
    }
    public function areapersegi(float $sisipersegi)
    {
        echo "Luas persegi = " . ($sisipersegi * $sisipersegi) .PHP_EOL;
    }

    public function curicumpersegi(float $sisipersegi)
    {
        echo "Keliling persegi = " . ($sisipersegi * 4) .PHP_EOL;
    }
    public function enlargepersegi(float $sisipersegi)
    {
        echo "ukuran besar = " . ($sisipersegi * 10) .PHP_EOL;
    }
    public function delargepersegi(float $sisipersegi)
    {
        echo "ukuran kecil = " . ($sisipersegi / 10) .PHP_EOL;
    }
    public function areapanjang(float $panjang, float $lebar)
    {
        echo "luas persegi panjang = " . ($panjang * $lebar) .PHP_EOL;
    }
    public function curicumpanjang(float $panjang, float $lebar)
    {
        echo "Keliling persegi panjang = " . (2 * ($panjang + $lebar)) .PHP_EOL;
    }
    public function enlargepanjang(float $panjang, float $lebar)
    {
        echo "ukuran besar = " . (($panjang * 10) + ($lebar * 10)) .PHP_EOL;
    }
    public function delargepanjang(float $panjang, float $lebar)
    {
        echo "ukuran kecil = " . (($panjang / 10) + ($lebar % 10)) .PHP_EOL;
    }

}
class lingkaran extends bangundatar
{
    public function __construct()
    {
        $this->jarijari;
    }
}

class persegi extends bangundatar
{
    public function __construct()
    {
        $this->sisipersegi;
    }
}
class persegipanjang extends bangundatar
{
    public function __construct()
    {
        $this->panjang;
        $this->lebar;
    }
}

$lingkaran = new lingkaran();
$lingkaran->arealingkaran(22);
$lingkaran->circumlingkaran(20);
$lingkaran->enlargelingkaran(20);
$lingkaran->delargelingkaran(30);
echo "=========== ^^ INI LINGKARAN" . PHP_EOL;

$persegi = new persegi();
$persegi->areapersegi(40);
$persegi->curicumpersegi(40);
$persegi->enlargepersegi(40);
$persegi->delargepersegi(400);
echo "========== ^^ INI PERSEGI" . PHP_EOL;

$persegipanjang = new persegipanjang();
$persegipanjang->areapanjang(20, 22);
$persegipanjang->curicumpanjang(20, 22);
$persegipanjang->enlargepanjang(4, 2);
$persegipanjang->delargepanjang(40, 20);
echo "========= ^^ INI PERSEGI PANJANG" . PHP_EOL;
