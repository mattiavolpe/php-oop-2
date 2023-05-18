<?php
  class Laptop extends Computer {
    public $brand;
    public $model;
    public $motherboard;
    public $ram;
    public $cpu;
    public $gpu;
    public $storage;
    public $powerSource;

    public function __construct(string $brand, string $model, Motherboard $motherboard, RAM $ram, CPU $cpu, GPU $gpu, Storage $storage, PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> powerSource = $powerSource;
    }

    public function setDeviceType() {
      $this -> deviceType = "Laptop";
    }
  }
