<?php


 class shoes
 {

   public $brand;
   public $type;
   public $size;
   public $quantity;
   public $price;

   // costruttore per la creazione delle istanze negli oggetti

   function __construct($brand,$type,$size,$quantity,$price)
   {
       // var_dump('ciao '); die();
       $this->brand = $brand;
       $this->type = $type;
       $this->size = $size;
       $this->quantity = $quantity;
       $this->price = $price;

   }

   // funzione per definire l'ordine delle istanze nell'oggetto da stampare a schermo

   public function getFullName()
   {
     $fullName = $this->brand . ' ' .$this->type . ' al prezzo di ' .$this->price . '$';

     return $fullName;
   }

   // funzione che ritorna la giacenza guardando nell'istanza dell'oggetto

   public function giacenza()
   {
    $giacenza = $this->quantity . ' pezzi ';

    return $giacenza;
    }



 }

?>
