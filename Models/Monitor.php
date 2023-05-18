<?php
  class Monitor {
    public $brand;
    public $model;
    public $inches;
    public $refreshRate;

    public function __construct(string $brand, string $model, float $inches, int $refreshRate) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> inches = $inches;
      $this -> refreshRate = $refreshRate;
    }
  }
