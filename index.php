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

  class Computer {
    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> motherboard = $motherboard;
      $this -> ram = $ram;
      $this -> cpu = $cpu;
      $this -> gpu = $gpu;
      $this -> storage = $storage;
    }
  }

  class Motherboard {
    public function __construct(public string $brand, public string $model, public string $socket, public int $ramSlots = 2, public string $formatFactor) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> socket = $socket;
      $this -> ramSlots = $ramSlots;
      $this -> formatFactor = $formatFactor;
    }
  }

  class RAM {
    public function __construct(public string $brand, public string $model, public int $banks = 1, public int $frequency, public int $gbPerBank, public int $latency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> banks = $banks;
      $this -> frequency = $frequency;
      $this -> gbPerBank = $gbPerBank;
      $this -> latency = $latency;
    }
  }

  class CPU {
    public function __construct(public string $brand, public string $model, public int $physicalCores, public int $logicalCores, public float $frequency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> physicalCores = $physicalCores;
      $this -> logicalCores = $logicalCores;
      $this -> frequency = $frequency;
    }
  }

  class GPU {
    public function __construct(public string $brand = "nVidia", public string $model, public int $frequency, public int $reservedMemory) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> frequency = $frequency;
      $this -> reservedMemory = $reservedMemory;
    }
  }

  class Storage {
    public function __construct(public string $brand, public string $model, public string $type = "SSD", public int $capacity) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> capacity = $capacity;
    }
  }

// POWER_SOURCE
// KEYBOARD
// MOUSE
// MONITOR
?>
