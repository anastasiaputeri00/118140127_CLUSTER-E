<?php
        $kunci = $_POST['cari_nama'];
    
        $koneksi=mysqli_connect("localhost", "root", "", "mahasiswa")or die("koneksi gagal");
        mysqli_select_db($koneksi, "mahasiswa");

        $tes = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nama like '%".$kunci."%'");

        while($baris = mysqli_fetch_array($tes)){
            echo "Nama : "; echo $baris[0]; echo "<br>";
            echo "NRP : "; echo $baris[1]; echo "<br>";
            echo "Foto : "; echo $baris[2]; echo "<br>";
            echo "Id_Jurusan : "; echo $baris[3]; echo "<br>";
        }
        
   ?>