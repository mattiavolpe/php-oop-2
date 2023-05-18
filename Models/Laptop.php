<?php
  class Laptop extends Computer {
    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage, public PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> powerSource = $powerSource;
    }

    public function setDeviceType() {
      $this -> deviceType = "Laptop";
    }
  }
