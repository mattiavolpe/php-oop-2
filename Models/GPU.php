<?php
  class GPU {
    use Frequency;

    public $brand;
    public $model;
    public $reservedMemory;

    public function __construct(string $brand, string $model, int $reservedMemory) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> reservedMemory = $reservedMemory;
    }
  }
