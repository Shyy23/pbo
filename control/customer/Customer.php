<?php
class Customer{
    public $id;
    public $nama;
    public $contact;
    public $alamat;
    public $pref;
    public $no;

    public function __construct($id_customer, $nama_customer, $contact_customer, $alamat_customer, $pref_produk, $no){
        $this->id = $id_customer;
        $this->nama = $nama_customer;
        $this->contact = $contact_customer;
        $this->alamat = $alamat_customer;
        $this->pref = $pref_produk;
        $this->no = $no;
    }
}   
?>