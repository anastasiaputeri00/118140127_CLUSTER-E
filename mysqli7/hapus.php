<?php
        $key=$_POST['hapus_data'];
        $koneksi=mysqli_connect("localhost", "root", "")or die("koneksi gagal");
        mysqli_select_db($koneksi, "data");

        mysqli_query($koneksi, "DELETE * FROM mahasiswa where nrp = '$key'");
   ?>