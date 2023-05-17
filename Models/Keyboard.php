<?php
  class Keyboard {
    public function __construct(public string $brand, public string $model, public string $type, public bool $numPad) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> numPad = $numPad;
    }
  }
