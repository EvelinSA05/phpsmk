<form action="" method="post">
    kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";

        $result = mysqli_query($koneksi, $sql);

        header("http://localhost/php-untuk-siswa-smk/phpsmk-bag21/restoran/kategori/select.php");
    }

?>