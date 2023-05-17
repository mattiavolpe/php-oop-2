<?php
  class Monitor {
    public function __construct(public string $brand, public string $model, public float $inches, public int $refreshRate) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> inches = $inches;
      $this -> refreshRate = $refreshRate;
    }
  }
