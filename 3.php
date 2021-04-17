<?php

function drawImage($n) {
    // cek paramater adalah bilangan genap
    if ($n % 2 == 0) {
        
        $baris = $n;
        $kolom = $n;
        
        for ($i=0; $i<=$baris; $i++) {
            for ($j=0; $j<=$kolom; $j++) {
                if ($j % 2 == 0) {
                    echo "#";
                } else {
                    echo "*";
                }
                    
            }
            echo "\n";
        }
        
    } else {
        echo 'Parameter bukan bilangan genap';
    }
}

drawImage(10);
