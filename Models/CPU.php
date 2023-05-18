<?php
  class CPU {
    use Frequency;

    public $brand;
    public $model;
    public $physicalCores;
    public $logicalCores;

    public function __construct(string $brand, string $model, int $physicalCores, int $logicalCores) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> physicalCores = $physicalCores;
      $this -> logicalCores = $logicalCores;
    }
  }
