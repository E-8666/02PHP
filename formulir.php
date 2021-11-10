<h1>Insert</h1>
<?php
    session_start();
?>
<form action = "simpan.php" method = "post" enctype = "multipart/form-data">
    <table>
    <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type = "text" name = "judul_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type = "text" name = "penulis"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type = "text" name = "jenis_buku"></td>
        </tr>
        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type = "file" name = "gambar_buku"></td>
        </tr>
        <tr>
            <td><button>Simpan Buku</button></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["Message"]);
    }
?>