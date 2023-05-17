<?php
  $computers = [
    new Laptop("MSI", "Modern 15", new Motherboard("MSI", "MB Model", "LG1155", 4, "ATX"), new RAM("G-Skill", "Ripjaws", "DDR4", 2, 3600, 8, 16), new CPU("AMD", "Ryzen 7 5800X", 8, 16, 3.6), new GPU("nVidia", "RTX 2070 Super", 4800, 8), new Storage("SSD", "Samsung", "970 Pro", 1024), new PowerSource("Battery", "MSI", "Battery Model", 400)),
    new Desktop("Dell", "Dell Model", new Motherboard("Asus", "TUF Gaming", "A44", 4, "ATX"), new RAM("Corsair", "Vengeance", "DDR5", 4, 6000, 8, 21), new CPU("Intel", "i7-1195G7", 8, 8, 3.2), new GPU("nVidia", "RTX 4070", 5000, 16), new Storage("M2", "Western-Digital", "Caviar Black", 2048), new Monitor("Asus", "VG258PQ", 24, 165), new Keyboard("Sharkoon", "Sharkoon Keyboard", "Mechanic", true), new Mouse("Razer", "Deathadder V2", 20000), new PowerSource("Modular", "Seasonic", "Gold 750", 750))
  ];
