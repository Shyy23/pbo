<?php
class FormFieldGenerator{
    private $tabel;

    public function __construct($tabel){
        $this->tabel = $tabel;
    }

    public function getFields(){
        switch($this->tabel){
            case 'customer':
                return [
                    'nama' => ['label' => 'Nama Customer', 'placeholder' => 'Masukkan Nama', 'type'=>'text'],
                    'contact' => ['label' => 'Contact Customer', 'placeholder' => 'Masukkan Contact', 'type'=>'text'],
                    'alamat' => ['label' => 'Alamat Customer', 'placeholder' => 'Masukkan Alamat', 'type' => 'text'],
                    'pref' => ['label' => 'Prefer Produk', 'placeholder' => 'Masukkan Prefer Produk ', 'type' => 'text']
                ];
            case 'barang': 
            return [
                'nama' => ['label' => 'Nama barang', 'placeholder' => 'Masukkan Nama ', 'type' => 'text'],
                'harga' => ['label' => 'Harga Barang', 'placeholder' => 'Masukkan Harga ', 'type' => 'number'], 
                'stok' => ['label' => 'Stok Barang', 'placeholder' => 'Masukkan Stok ', 'type' => 'number'], 
            ];
            default:
            return [];
        }
    }
}
?>