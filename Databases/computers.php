<?php
  $computers = [
    new Laptop("MSI", "Modern 15", new Motherboard("MSI", "MB Model", "LGA1155", 4, "ATX"), new RAM("G-Skill", "Ripjaws", "DDR4", 2, 8, 16), new CPU("AMD", "Ryzen 7 5800X", 8, 16), new GPU("nVidia", "RTX 2070 Super", 8), new Storage("SSD", "Samsung", "970 Pro", 1024), new PowerSource("Battery", "MSI", "Battery Model", 400)),
    new Desktop("Dell", "Dell Model", new Motherboard("Asus", "TUF Gaming", "A44", 4, "ATX"), new RAM("Corsair", "Vengeance", "DDR5", 4, 8, 21), new CPU("Intel", "i7-1195G7", 8, 8), new GPU("nVidia", "RTX 4070", 16), new Storage("M2", "Western-Digital", "Caviar Black", 2048), new Monitor("Asus", "VG258PQ", 24, 165), new Keyboard("Sharkoon", "Sharkoon Keyboard", "Mechanic", true), new Mouse("Razer", "Deathadder V2", 20000), new PowerSource("Modular", "Seasonic", "Gold 750", 750)),
    new Desktop("Dell", "Dell Model", new Motherboard("Asus", "TUF Gaming", "A44", 4, "ATX"), new RAM("Corsair", "Vengeance", "DDR5", 4, 8, 21), new CPU("Intel", "i7-1195G7", 8, 8), new GPU("nVidia", "RTX 4070", 16), new Storage("M2", "Western-Digital", "Caviar Black", 2048), new Monitor("Asus", "VG258PQ", 24, 165), new Keyboard("Sharkoon", "Sharkoon Keyboard", "Mechanic", true), new Mouse("Razer", "Deathadder V2", 20000), new PowerSource("Modular", "Seasonic", "Gold 750", 750)),
    new Laptop("MSI", "Modern 15", new Motherboard("MSI", "MB Model", "LG1155", 4, "ATX"), new RAM("G-Skill", "Ripjaws", "DDR4", 2, 8, 16), new CPU("AMD", "Ryzen 7 5800X", 8, 16), new GPU("nVidia", "RTX 2070 Super", 8), new Storage("SSD", "Samsung", "970 Pro", 1024), new PowerSource("Battery", "MSI", "Battery Model", 400))
  ];

  try {
    foreach ($computers as $computer) {
      $computer -> ram -> setFrequency(rand(300, 500) / 100);
      $computer -> cpu -> setFrequency(rand(300, 500) / 100);
      $computer -> gpu -> setFrequency(rand(300, 500) / 100);
    }
  } catch (Exception $error) {
    echo $error -> getMessage();
  }
