<?php
require_once 'Customer.php';
require_once 'CustomerManager.php';

$customerManager = new CustomerManager();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $contact = $_POST['contact'];
    $alamat = $_POST['alamat'];
    $pref = $_POST['pref'];
    $customerManager->tambahCustomer($nama, $contact, $alamat, $pref);
    header( 'Location: ../../view/tabel/view_customer.php');
    exit;
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $customerManager->hapusCustomer($id);
    header( 'Location:view_customer.php');
    exit;
}
?>