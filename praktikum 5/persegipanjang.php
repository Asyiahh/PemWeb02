<?php

/**
 * class Persegi Panjang
 */
class PersegiPanjang
{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    /**
     * Method untuk menghitung luas persegi panjang
     */
    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    /**
     * Method untuk menghitung keliling persegi panjang
     */
    public function hitungKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegi1 = new PersegiPanjang(5, 6);
echo "Luas Persegi Panjang : " . $persegi1->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang : " . $persegi1->hitungKeliling();
