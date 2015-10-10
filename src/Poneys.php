<?php 
  class Poneys {
      private $count = 8;

      public function getCount() {
        return $this->count;
      }

      public function removePoneyFromField($number) {
        $this->count -= $number;
      }

      public function getNames() {

      }
  }
?>
