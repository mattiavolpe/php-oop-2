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
  
  foreach ($computers as $computer) {
    $computer -> setDeviceType($computer);
  }

?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Computers Tech Specs</title>

    <style>
      body {
        font-family: 'Open Sans', sans-serif;
      }

      strong {
        color: #FFC107;
      }

      ul {
        list-style: none;
        padding-left: 1rem;
        margin-bottom: 0;
      }

      ul > li > strong {
        color: #0D6EFD;
      }
    </style>
  </head>
  
  <body class="bg-dark">
    
    <main id="app_main" class="py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <?php foreach($computers as $computer) : ?>
          <div class="col">
            <div class="card h-100">
              <div class="card-header text-center">
                <h4 class="mb-0 text-success">
                  <?= $computer -> brand . ": " . $computer -> model; ?>
                </h4>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  <strong>Type:</strong> <?= $computer -> getDeviceType($computer) ?>
                </p>
                <hr>
                <?php
                  include __DIR__ . "/views/partials/motherboard.php";
                  echo "<hr>";
                  include __DIR__ . "/views/partials/ram.php";
                  echo "<hr>";
                  include __DIR__ . "/views/partials/cpu.php";
                  echo "<hr>";
                  include __DIR__ . "/views/partials/gpu.php";
                  echo "<hr>";
                  include __DIR__ . "/views/partials/storage.php";
                  echo "<hr>";
                  include __DIR__ . "/views/partials/powerSource.php";
                  if($computer instanceof Desktop) {
                    echo "<hr>";
                    include __DIR__ . "/views/partials/monitor.php";
                    echo "<hr>";
                    include __DIR__ . "/views/partials/keyboard.php";
                    echo "<hr>";
                    include __DIR__ . "/views/partials/mouse.php";
                  }
                ?>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <?php endforeach; ?>
        </div>
        <!-- /.row row-cols-1 row-cols-sm-2 row-cols-md-3 -->
      </div>
      <!-- /.container -->
    </main>
    <!-- /#app_main -->
    
  </body>
  
</html>