<?php
  class Storage {
    public $type;
    public $brand;
    public $model;
    public $capacity;

    public function __construct(string $type, string $brand, string $model, int $capacity) {
      $this -> type = $type;
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> capacity = $capacity;
    }
  }
