<?php

$datakey = array('dumb', 'ways', 'the', 'best');
$word = "dumbways";

function check($datakey, $word) {
    for($i=0; $i<=count($datakey)-1; $i++) {
        echo $datakey[$i] . " => ";
        
        if(strpos($word, $datakey[$i]) !== FALSE) {
            echo "TRUE" . "\n";
        } else {
            echo "FALSE" . "\n";
        }
    }
}

check($datakey, $word);
