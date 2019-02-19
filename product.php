<?php

 class shoes
 {
   public $brand;
   public $type;
   public $size;
   public $color;
   public $price;

   public function getFullName()
   {
     $fullName = $this->brand . ' ' .$this->type . ' ' .$this->price;

     return $fullName;
   }
 }

?>
