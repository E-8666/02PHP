<h1>Simpan</h1>
<?php
    session_start();
    if(isset($_POST["judul_buku"])){
    include 'koneksi.php';
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_FILES['gambar_buku'];
    $message        = "";
    if($judul_buku==""){
        $message    = "Judul Buku wajib di isi!";
    }else if($penulis==""){
        $message    = "Penulis Wajib di isi!";
    }else if($jenis_buku==""){
        $message    = "Jenis Buku harus di isi!";
    }else if($gambar_buku==""){
        $message    = "Gambar Buku harus dipilih!";
    }else{
        $filepath = "upload/".basename($gambar_buku["name"]);
        move_uploaded_file($gambar_buku["tmp_name"], $filepath);

        $conn->query("INSERT INTO buku VALUES (null, '".$judul_buku."' , '".$penulis."' , '".$jenis_buku."' , '".$filepath."')");
        $message = "Buku berhasil ditambahkan!";
    }
    $_SESSION["message"] = $message;
}

header("location:formulir.php");
exit();
?>