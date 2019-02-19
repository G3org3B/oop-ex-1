
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

  <ul>
    <li>L'articolo <?php echo $nike->getFullName(); ?> quantità disponibile a magazzino <?php echo $nike->quantity; ?></li>
    <li>L'articolo <?php echo $vans->getFullName(); ?> quantità disponibile a magazzino <?php echo $vans->quantity; ?></li>
    <li>L'articolo <?php echo $puma->getFullName(); ?> quantità disponibile a magazzino <?php echo $puma->quantity; ?></li>
  </ul>
