<?php
  class Computer {
    protected string $deviceType;

    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage) {
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
