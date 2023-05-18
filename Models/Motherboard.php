<?php
  class Motherboard {
    public $brand;
    public $model;
    public $socket;
    public $ramSlots;
    public $formatFactor;

    public function __construct(string $brand, string $model, string $socket, int $ramSlots, string $formatFactor) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> socket = $socket;
      $this -> ramSlots = $ramSlots;
      $this -> formatFactor = $formatFactor;
    }
  }
