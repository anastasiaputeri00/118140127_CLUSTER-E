<!DOCTYPE>
<html>
<head>
    <title>Data Terurut</title>
</head>
<body>
    <?php
    /*
Nama : Anastasia Puteri Dewi
NIM : 118140127
Kelas : Pemrograman Web RD
Cluster : E
*/
    $data = array("lanrine","aduh","qifuat","toda","anevi","samid","kifuat");
    sort($data);
    for($i=0; $i<=6; $i++){
        echo $data[$i].", ";
    }
    
    ?>
</body>
</html>