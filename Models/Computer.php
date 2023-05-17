<?php
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

    public function getDeviceType($computer) {
      if($computer instanceof Desktop) {
        return "Desktop";
      } return "Laptop";
    }
  }
