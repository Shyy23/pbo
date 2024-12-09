<?php
class Barang {
    public $id;
    public $nama;
    public $harga;
    public $stok;

    public $no;

    public function __construct($id, $nama, $harga, $stok, $no){
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->no = $no;
    }
    
}



?>