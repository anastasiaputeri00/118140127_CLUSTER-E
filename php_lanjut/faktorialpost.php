<?php
function faktorial ($n){
    if ($n < 2){
        return 1;
    } else {
        return ($n * faktorial($n-1));
    }
}
?>