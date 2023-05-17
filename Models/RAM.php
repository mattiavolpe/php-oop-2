<?php
  class RAM {
    public function __construct(public string $brand, public string $model, public string $type, public int $banks = 1, public int $frequency, public int $gbPerBank, public int $latency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> banks = $banks;
      $this -> frequency = $frequency;
      $this -> gbPerBank = $gbPerBank;
      $this -> latency = $latency;
    }
  }
