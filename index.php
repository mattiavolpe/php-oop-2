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

  class Desktop extends Computer {
    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage, public Monitor $monitor, public Keyboard $keyboard, public Mouse $mouse, public PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> monitor = $monitor;
      $this -> keyboard = $keyboard;
      $this -> mouse = $mouse;
      $this -> powerSource = $powerSource;
    }
  }

  class Laptop extends Computer {
    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage, public PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> powerSource = $powerSource;
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
    public function __construct(public string $brand, public string $model, public string $type, public int $banks = 1, public int $frequency, public int $gbPerBank, public int $latency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
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
    public function __construct(public string $brand, public string $model, public int $frequency, public int $reservedMemory) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> frequency = $frequency;
      $this -> reservedMemory = $reservedMemory;
    }
  }

  class Storage {
    public function __construct(public string $type, public string $brand, public string $model, public int $capacity) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> capacity = $capacity;
    }
  }

  class Monitor {
    public function __construct(public string $brand, public string $model, public float $inches, public int $refreshRate) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> inches = $inches;
      $this -> refreshRate = $refreshRate;
    }
  }

  class Keyboard {
    public function __construct(public string $brand, public string $model, public string $type, public bool $numPad) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> numPad = $numPad;
    }
  }

  class Mouse {
    public function __construct(public string $brand, public string $model, public int $maxDPI) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> maxDPI = $maxDPI;
    }
  }

  class PowerSource {
    public function __construct(public string $type, public string $brand, public string $model, public int $watts) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> watts = $watts;
    }
  }

  $laptopMSI = new Laptop("MSI", "Modern 15", new Motherboard("MSI", "MB Model", "LG1155", 4, "ATX"), new RAM("G-Skill", "Ripjaws", "DDR4", 2, 3600, 8, 16), new CPU("AMD", "Ryzen 7 5800X", 8, 16, 3.6), new GPU("nVidia", "RTX 2070 Super", 4800, 8), new Storage("SSD", "Samsung", "970 Pro", 1024), new PowerSource("Integrated", "MSI", "PSU Model", 700));

  $desktopDell = new Desktop("Dell", "Dell Model", new Motherboard("Asus", "TUF Gaming", "A44", 4, "ATX"), new RAM("Corsair", "Vengeance", "DDR5", 4, 6000, 8, 21), new CPU("Intel", "i7-1195G7", 8, 8, 3.2), new GPU("nVidia", "RTX 4070", 5000, 16), new Storage("M2", "Western-Digital", "Caviar Black", 2048), new Monitor("Asus", "VG258PQ", 24, 165), new Keyboard("Sharkoon", "Sharkoon Keyboard", "Mechanic", true), new Mouse("Razer", "Deathadder V2", 20000), new PowerSource("Modular", "Seasonic", "Gold 750", 750));

  var_dump($laptopMSI);
  var_dump($desktopDell);
?>
