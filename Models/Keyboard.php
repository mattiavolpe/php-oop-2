<?php
  class Keyboard {
    public $brand;
    public $model;
    public $type;
    public $numPad;

    public function __construct(string $brand, string $model, string $type, bool $numPad) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> numPad = $numPad;
    }
  }
