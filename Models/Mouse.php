<?php
  class Mouse {
    public $brand;
    public $model;
    public $maxDPI;

    public function __construct(string $brand, string $model, int $maxDPI) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> maxDPI = $maxDPI;
    }
  }
