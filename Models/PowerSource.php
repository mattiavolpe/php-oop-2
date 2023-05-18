<?php
  class PowerSource {
    public $type;
    public $brand;
    public $model;
    public $watts;

    public function __construct(string $type, string $brand, string $model, int $watts) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> watts = $watts;
    }
  }
