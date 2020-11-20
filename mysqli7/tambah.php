<?php 

	$conn = mysqli_connect("localhost","root","","mahasiswa") or die ("koneksi ke database gagal");

	function tambah($data){

		global $conn;

		$nrp = $data["nrp"];
		$nama = $data["nama"];
		$foto = $data["foto"];
		$jurusan = $data["jurusan"];

		if ($data["jurusan"] == "Teknik Informatika") {

			$id_tel = "1";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_tel')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Teknik Sipil") {

			$id_elka = "2";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_elka')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Teknik Mesin") {

			$id_it = "3";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_it')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Arsitektur") {

			$id_eli = "4";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_eli')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
        }
        
		else if ($data["jurusan"] == "Farmasi") {

			$id_eli = "5";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_eli')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}


	}

 ?>