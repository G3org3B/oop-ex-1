
<!-- Exercise - crea e modellizza classi per gestire i prodotti di un magazzino -->

  <?php

    require 'product.php';

    $nike = new shoes();

    $nike->brand = 'Nike';
    $nike->type = 'oldschool';
    $nike->size = '41';
    $nike->color ='blue';
    $nike->price = '99$';

    // var_dump($nike); die();


    $vans = new shoes();

    $vans->brand = 'Vans';
    $vans->type = 'low';
    $vans->size = '42';
    $vans->color ='red';
    $vans->price = '75$';

    $puma = new shoes();

    $puma->brand = 'Puma';
    $puma->type = 'running';
    $puma->size = '38';
    $puma->color ='white';
    $puma->price = '88$';


  ?>

  <ul>
    <!-- <li><?php echo $nike->brand . ' - ' .$nike->type . ' - ' .$nike->size . ' - ' .$nike->color . ' - ' . $nike->price ?></li> -->
    <li><?php echo $nike->getFullName(); ?></li>
    <li><?php echo $vans->getFullName(); ?></li>
    <li><?php echo $puma->getFullName(); ?></li>
  </ul>
