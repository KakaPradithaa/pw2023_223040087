<?php 
    $conn = mysqli_connect("localhost", "root", "", "pemerintah");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
	
//function tambah artikel
    function tambah_artikel($data)
{
	global $conn;

	$gambar = upload();
	if (!$gambar){
		return false;
	}
	$judul = htmlspecialchars($data["judul"]);
	$isi = htmlspecialchars($data["isi"]);


	$query = "INSERT INTO artikel
				VALUES
				(null, '$gambar', '$judul', '$isi')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//function upload gambar
function upload()
{
	$nameFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4){
		echo"<script>
		alert('masukan foto terlebih dahulu'); 
		</script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
	$ekstensiGambar = explode ('.', $nameFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo"<script>
		alert('yang anda uplod bukan gambar '); 
		</script>";
		return false;
	}

	if ($ukuranFile > 1000000){
		echo"<script>
		alert('ukuran gambar terlalu besar '); 
		</script>"; 
		return false;
	}
	// memindahkan file
	move_uploaded_file ($tmpName, '../artikel/' . $nameFile);
	return $nameFile;


}
//function hapus artikel
function hapus_artikel($id_artikel)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = '$id_artikel'");
    return mysqli_affected_rows($conn);
}

//function ubah artikel
function ubah_artikel($data) {
	global $conn;

	$gambar = upload();
	if (!$gambar){
		return false;
	}
	$id_artikel = $data["id_artikel"];
	$judul = htmlspecialchars($data["judul"]);
	$isi = htmlspecialchars($data["isi"]);


	$query = "UPDATE artikel SET
				gambar = '$gambar',
				judul = '$judul',
				isi = '$isi'
				WHERE id_artikel = $id_artikel
";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// function search pada admin
function cari($keyword){
	$query = "SELECT * FROM artikel
				WHERE
				judul LIKE '%$keyword%' OR
				isi LIKE '%$keyword%'   	
			";
	return query($query); 		
}

//function register
function register($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

// cek username duplicate
$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

if( mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('Username sudah terdaftar!');
    </script>";
    return false;
}

// cek konfirmasi password
if( $password !== $password2 ) {
    echo "<script>
        alert('Konfirmasi password tidak sesuai!');
    </script>";
    return false;
}

// enskripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambah userbaru ke database
mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

return mysqli_affected_rows($conn);
}



?>