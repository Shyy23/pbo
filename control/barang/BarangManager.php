<?php
class BarangManager {
    private $datafile = __DIR__ . '/../../data/data_barang.json'; // Menggunakan path absolut berbasis direktori file ini
    private $barangList = [];

    public function __construct(){
        if(file_exists($this->datafile)){
            $data = file_get_contents($this->datafile);
            $this->barangList = json_decode($data, true) ?? [];
        }
    }

    // Menambahkan Barang
    public function tambahBarang( $nama,$harga, $stok){
        $id = uniqid();
        $barang = new Barang($id, $nama, $harga, $stok);
        $this->barangList[] = $barang;
        $this->simpanData();
    }

    // Mendapatkan Semua Barang
    public function getBarang(){
        return $this->barangList;
    }

    // Menghapus Barang Berdasarkan Id
    public function hapusBarang($id){
        $this->barangList = array_filter($this->barangList, function($barang) use ($id){
            return $barang['id'] !== $id;
        });
        $this->simpanData();
    }

    private function simpanData(){
        file_put_contents($this->datafile, json_encode($this->barangList, JSON_PRETTY_PRINT));
    }

}



?>