<?php
  class Desktop extends Computer {
    public function __construct(public string $brand, public string $model, public Motherboard $motherboard, public RAM $ram, public CPU $cpu, public GPU $gpu, public Storage $storage, public Monitor $monitor, public Keyboard $keyboard, public Mouse $mouse, public PowerSource $powerSource) {
      parent::__construct($brand, $model, $motherboard, $ram, $cpu, $gpu, $storage);
      $this -> monitor = $monitor;
      $this -> keyboard = $keyboard;
      $this -> mouse = $mouse;
      $this -> powerSource = $powerSource;
    }
  }
