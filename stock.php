
<!-- Exercise - crea e modellizza classi per gestire i prodotti di un magazzino -->

  <?php

  //require del file della classe

    require 'shoes.php';

 //creazione oggetto tramite il costruttore

    $nike = new shoes('nike','lunar', 42, 34, 100);

    // var_dump($nike); die();

    $vans = new shoes('vans','oldschool',40, 20, 79);

    $puma = new shoes('puma','running',50, 10, 99);


  ?>

  <!-- stampa a schermo degli oggetti  -->

  <ul>
    <li>L'articolo <?php echo $nike->getFullName(); ?> ----- ha una quantità disponibile a magazzino di <?php echo $nike->giacenza(); ?></li>
    <li>L'articolo <?php echo $vans->getFullName(); ?> -----  ha una quantità disponibile a magazzino di <?php echo $vans->giacenza(); ?></li>
    <li>L'articolo <?php echo $puma->getFullName(); ?> -----  ha una quantità disponibile a magazzino di <?php echo $puma->giacenza(); ?></li>
  </ul>
