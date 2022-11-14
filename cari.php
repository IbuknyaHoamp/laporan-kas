<?php 
require_once 'database/koneksi.php';

session_start();

if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit;
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Laporan</title>
    <?php require_once 'layouts/_css.php'; ?>
</head>
<body>
    <div class="container py-5">
        <form action="hasilCari.php" method="POST">

            <h1>Cari Laporan Kas</h1>
            <div class="row">
                <div class="col-md-3">
                    <label for="from">From</label>
                    <input type="date" name="tanggalAwal" id="from" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="to">From</label>
                    <input type="date" name="tanggalAkhir" id="to" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="hari">Hari</label>
                    <select class="form-select form-select-lg" name="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-primary mt-4" name="cari">Cari</button>
        </form>
        <a href="index.php" class="btn btn-warning mt-4">Kembali</a>
        
    </div>
    
    <?php require_once 'layouts/_js.php'; ?>
</body>
</html>