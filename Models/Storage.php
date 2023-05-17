<?php
  class Storage {
    public function __construct(public string $type, public string $brand, public string $model, public int $capacity) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> capacity = $capacity;
    }
  }
