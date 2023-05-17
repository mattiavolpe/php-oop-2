<?php
  class Motherboard {
    public function __construct(public string $brand, public string $model, public string $socket, public int $ramSlots = 2, public string $formatFactor) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> socket = $socket;
      $this -> ramSlots = $ramSlots;
      $this -> formatFactor = $formatFactor;
    }
  }
