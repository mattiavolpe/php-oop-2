<?php
  class CPU {
    public function __construct(public string $brand, public string $model, public int $physicalCores, public int $logicalCores, public float $frequency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> physicalCores = $physicalCores;
      $this -> logicalCores = $logicalCores;
      $this -> frequency = $frequency;
    }
  }
