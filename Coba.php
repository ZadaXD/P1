<?php
$angka = 2;
if ($angka<=1){
    echo "Bukan Prima";
    }elseif ( $angka % 2==0 or $angka % 3==0 or $angka % 5==0 or $angka % 7==0){
        echo "Bukan Prima";
    }
    else if (
        $angka == 2 or $angka == 3 or $angka == 5 or $angka == 7){
            echo "Prima";
        }
    else{
        echo "Prima";
    }