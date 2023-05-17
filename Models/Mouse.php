<?php
  class Mouse {
    public function __construct(public string $brand, public string $model, public int $maxDPI) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> maxDPI = $maxDPI;
    }
  }
