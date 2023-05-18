<?php
  trait Frequency {
    private $frequency;

    public function setFrequency(float $frequency) {
      if (is_numeric($frequency)) {
        $this -> frequency = $frequency;
      } else {
        throw new Exception("Insert a number for the frequency");
      }
    }

    public function getFrequency() {
      return $this -> frequency;
    }
  }
