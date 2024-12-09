<?php

class CustomerManager {
    private $dataCustomer = __DIR__.'/../../data/data_customer.json';
    private $customerList = [];

    public function __construct(){
        if(file_exists($this->dataCustomer)){
            $data = file_get_contents($this->dataCustomer);
            $this->customerList = json_decode($data, true) ?? [];
        }
    }

    public function tambahCustomer($nama_customer, $contact_customer, $alamat_customer, $pref_produk){
        $id = uniqid();
        $no = count($this->customerList) + 1; 

        $customer = new Customer($id, $nama_customer, $contact_customer, $alamat_customer, $pref_produk, $no);
        $this->customerList[] = $customer;
        $this->simpanData();
    }

    public function getCustomer(){
        return $this->customerList;
    }

    public function hapusCustomer($id_customer){
        $this->customerList = array_filter($this->customerList, function($customer) use ($id_customer){
            return $customer['id'] !== $id_customer;
        });
        $this->simpanData();
    }

    private function simpanData(){
        file_put_contents($this->dataCustomer, json_encode($this->customerList));
    }
    
}

?>