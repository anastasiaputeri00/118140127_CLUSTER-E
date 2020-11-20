<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa PENS</title>
</head>
<body>
    <h2>DATA MAHASISWA PENS</h2>
    ====================================================
    <h2>TAMBAH DATA</h2><br><br>

    <form method = "post">
    <label><b> NRP :</b></label>
    <input type="text" name="nim"><br><br>

    <label><b> Nama :</b></label>
    <input type="text" name="nama"><br><br>

    <label><b> Foto :</b></label>
    <input type="file" name="foto"><br><br>

    <label><b> Jurusan :</b></label>

    <select>
    <?php
    $koneksi = mysqli_connect("localhost","root","","mahasiswa");
    $hasil = mysqli_query($koneksi, "select * from jurusan");
    while ($nama_jur = mysqli_fetch_array($hasil)){
        echo "<option value=".$nama_jur['nama'].">".$nama_jur['nama']."</option>";
    }
    ?>
    </select>
    <br><br><br>

    <button type="submit" name="submit">Tambah</button><br><br>
    </form>
    ====================================================
    <h2>SEARCH DATA</h2>
    <form method = "post">
    <label><b> NRP :</b></label>
    <input type="text" name="cari_nama">
    <button type="submit" name="cari">Cari Data</button><br><br>
    </form>
    ====================================================
    <?php
    $koneksi = mysqli_connect("localhost","root","","mahasiswa");

    //check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_errno();
    }
    ?>
</body>
</html>