<?php
  /* 
  Immaginiamo le classi per modellizzare un personal computer.
  Un computer desktop é un computer.
  Un computer portatile é un computer.
  Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
  Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
  Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo polimorfo in ciascuna sottoclasse.

  BONUS:
  pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
  aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).
  */
  
  include __DIR__ . "/Traits/Frequency.php";
  include __DIR__ . "/Models/Computer.php";
  include __DIR__ . "/Models/Desktop.php";
  include __DIR__ . "/Models/Laptop.php";
  include __DIR__ . "/Models/Motherboard.php";
  include __DIR__ . "/Models/RAM.php";
  include __DIR__ . "/Models/CPU.php";
  include __DIR__ . "/Models/GPU.php";
  include __DIR__ . "/Models/Storage.php";
  include __DIR__ . "/Models/Monitor.php";
  include __DIR__ . "/Models/Keyboard.php";
  include __DIR__ . "/Models/Mouse.php";
  include __DIR__ . "/Models/PowerSource.php";
  include __DIR__ . "/Databases/computers.php";
  
  try {
    foreach ($computers as $computer) {
      $computer -> ram -> setFrequency(rand(300, 500) / 100);
      $computer -> cpu -> setFrequency(rand(300, 500) / 100);
      $computer -> gpu -> setFrequency(rand(300, 500) / 100);
    }
  } catch (Exception $error) {
    echo $error -> getMessage();
  }
  
  foreach ($computers as $computer) {
    $computer -> setDeviceType($computer);
  }

?>

<!DOCTYPE html>
<html lang="en">
  
  <?php include __DIR__ . "/views/layouts/head.php"; ?>
  
  <body class="bg-dark">
    
    <main id="app_main" class="py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <?php foreach($computers as $computer) : ?>
          <?php include __DIR__ . "/views/partials/singleComputerMarkup.php" ?>
          <?php endforeach; ?>
        </div>
        <!-- /.row row-cols-1 row-cols-sm-2 row-cols-md-3 -->
      </div>
      <!-- /.container -->
    </main>
    <!-- /#app_main -->
    
  </body>
  
</html>
