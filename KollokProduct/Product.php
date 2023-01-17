<?php
class Product {
    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => '3D Camera',
            'code' => '3DcAM01',
            'price' => '1500.00'
        ),
        "Bike" => array(
            'id' => '2',
            'name' => 'BMX',
            'code' => 'Bike',
            'price' => 2000
        ),
        "Bike1" => array(
            'id' => '3',
            'name' => 'BMX',
            'code' => 'Bike1',
            'price' => 2000
        ),
        "Bike2" => array(
            'id' => '4',
            'name' => 'BMX',
            'code' => 'Bike2',
            'price' => 2000
        ));
        public function getAllProduct() {
            return $this->productArray;
        }

}

?>