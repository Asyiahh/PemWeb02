<?php
/**
 * class lingkaran
 */
class Lingkaran{
    /**
     * @var float
     */
    public $jari;
    public const PHI = 3.14;

    public function __construct($jari){
        $this->jari = $jari;
    }

    /**
     * method untuk menghitung luas
     */
    public function getLuas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

/**
 * method untuk menhitung keliling
 */
    public function getKeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    /**
     * method untuk mencetak informasi lingkaran
     */
    public function cetak(){
        echo "Lingkaran dengan jari2" . $this->jari;
        echo "<br>Luas = " . $this->getLuas();
        echo "<br>Keliling = " . $this->getKeliling();
    }
}
?>