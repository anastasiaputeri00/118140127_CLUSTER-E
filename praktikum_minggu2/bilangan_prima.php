<!DOCTYPE>
<html>
<head>
    <title>Pencarian Bilangan Prima</title>
</head>
<body>
<?php
/*
Nama : Anastasia Puteri Dewi
NIM : 118140127
Kelas : Pemrograman Web RD
Cluster : E
*/
    for($i=1;$i<=50;$i++){ 
            $a = 0;
            for($j=1;$j<=$i;$j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
            echo $i.', ';
            }
        }

    ?>
</body>
</html>