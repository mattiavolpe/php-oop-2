<?php
  class Desktop extends Computer {
    public $brand;
    public $model;
    public $motherboard;
    public $ram;
    public $cpu;
    public $gpu;
    public $storage;
    public $monitor;
    public $keyboard;
    public $mouse;
    public $powerSource;

    public function __construct(string $brand, string $model, Motherboard $motherboard, RAM $ram, CPU $cpu, GPU $gpu, Storage $storage, Monitor $monitor, Keyboard $keyboard, Mouse $mouse, PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> monitor = $monitor;
      $this -> keyboard = $keyboard;
      $this -> mouse = $mouse;
      $this -> powerSource = $powerSource;
    }

    public function setDeviceType() {
      $this -> deviceType = "Desktop";
    }
  }
