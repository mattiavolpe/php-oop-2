<?php
  class PowerSource {
    public function __construct(public string $type, public string $brand, public string $model, public int $watts) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> watts = $watts;
    }
  }
