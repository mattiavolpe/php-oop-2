<?php
  class GPU {
    public function __construct(public string $brand, public string $model, public float $frequency, public int $reservedMemory) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> frequency = $frequency;
      $this -> reservedMemory = $reservedMemory;
    }
  }
