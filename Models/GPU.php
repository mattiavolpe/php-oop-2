<?php
  class GPU {
    use Frequency;

    public $brand;
    public $model;
    // public $frequency;
    public $reservedMemory;

    public function __construct(string $brand, string $model, int $reservedMemory) {
      $this -> brand = $brand;
      $this -> model = $model;
      // $this -> frequency = $frequency;
      $this -> reservedMemory = $reservedMemory;
    }
  }
