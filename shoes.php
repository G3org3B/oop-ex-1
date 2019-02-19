<?php

 class shoes
 {


   public $brand;
   public $type;
   public $size;
   public $quantity;
   public $price;

   function _construct($brand,$type,$size,$quantity,$price)
   {
       // var_dump('ciao '); die();
       $this->brand = $brand;
       $this->type = $type;
       $this->size = $size;
       $this->quantity = $quantity;
       $this->price = $price;

   }

   public function getFullName()
   {
     $fullName = $this->brand . ' ' .$this->type . ' ' .$this->price . '$';

     return $fullName;
   }

 }

?>
