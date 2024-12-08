<?php
require_once 'Barang.php';
require_once 'BarangManager.php';

$barangManager = new BarangManager();

// Menangani form tambah Barang
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $barangManager->tambahBarang($nama, $harga, $stok);
    header('Location: ../../view/tabel/view_barang.php');
    exit;
}

// Menangati Penghapusan Barang
if(isset($_GET['hapus'])){
    $id =  $_GET['hapus'];
    $barangManager->hapusBarang($id);
    header(header: 'Location: view_barang.php');
    exit;
}



?>