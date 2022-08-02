<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<form action="" method="POST">
    <h2>Inputan Dan Validasi</h2>
    <hr>
    NIM : <br>
    <input type="text" name="nim" value="20101105" readonly>
    <br><br>
    Nama : <br>
    <input type="text" name="nama" value="Marcell Budi Putra" readonly>
    <br><br>
    Email : <br>
    <input type="email" name="email" minlength="10" placeholder="Masukan Email anda" required>
    <br><br>
    Komentar : <br>
    <textarea name="komentar" minlength="5" maxlength="140" placeholder="Komentar Anda" required></textarea>
    <br><br>

    <button name="tombol_submit" type="submit">Submit</button>
</form>


<div class="hasil">
<?php 

if (isset($_POST['tombol_submit'])) {
    echo "NIM = $_POST[nim] <br>";
    echo "Nama = $_POST[nama] <br>";
    echo "Email = $_POST[email] <br>";

    $komentar = "$_POST[komentar]";
    $kata = explode(" ", $komentar);
    $hasil_komentar = count($kata);

    echo "Komentar = $komentar <hr>";
    echo "<b>Jumlah Kata = $hasil_komentar kata </b>";
}

?>

</div>
</div>
</body>
</html>
