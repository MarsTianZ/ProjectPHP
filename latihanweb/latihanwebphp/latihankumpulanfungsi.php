<?php 
function tambah ($z, $d){
return $z+$d;
}
function kurang ($z, $d){
    return $z-$d;
    }
    function kali ($z, $d){
        return $z*$d;
        }
        function bagi ($z, $d){
            if($d == 0){
                return "Tidak bisa dibagi dengan angka nol";
            } else {
                return $z/$d;
            }
            }
            function ganjil($z, $d){
                for ($i=$z; $i <=$d ; $i++) { 
                    if($i %2 !=0){ //kondisi
                        echo $i. " ";
                    }
                }
                }
                function genap($z, $d){
                    for ($i=$z; $i <=$d ; $i++) { 
                        if($i %2 ==0){ //kondisi
                            echo $i. " ";
                        }
                    }
                    }
?>