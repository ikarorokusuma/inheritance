<?php 
Class alatTulis{
    public $nama, $merk, $warna;
    
    public function beli(){
        return "Alat tulis dibeli";
    }
}
class Pensil extends alatTulis{
    

    public function tidakBeli(){
        
        return "Tidak perlu beli pensil";
    }
}
$atk = new Pensil();
echo $atk->beli();
echo "<br>";
echo $atk->tidakBeli();







?>