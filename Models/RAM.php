<?php
  class RAM {
    use Frequency;

    public $brand;
    public $model;
    public $type;
    public $banks;
    // public $frequency;
    public $gbPerBank;
    public $latency;

    public function __construct(string $brand, string $model, string $type, int $banks, int $gbPerBank, int $latency) {
      $this -> brand = $brand;
      $this -> model = $model;
      $this -> type = $type;
      $this -> banks = $banks;
      // $this -> frequency = $frequency;
      $this -> gbPerBank = $gbPerBank;
      $this -> latency = $latency;
    }
  }
