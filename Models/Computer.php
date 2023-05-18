<?php
  class Computer {
    protected $deviceType;
    public $brand;
    public $model;
    public $motherboard;
    public $ram;
    public $cpu;
    public $gpu;
    public $storage;


    public function __construct(string $brand, string $model, Motherboard $motherboard, RAM $ram, CPU $cpu, GPU $gpu, Storage $storage) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> motherboard = $motherboard;
      $this -> ram = $ram;
      $this -> cpu = $cpu;
      $this -> gpu = $gpu;
      $this -> storage = $storage;
    }

    public function setDeviceType() {
      $this -> deviceType = "Computer";
    }

    public function getDeviceType() {
      return $this -> deviceType;
    }
  }
