<?php
  class Poneys {
      private $count = 8;

      public function getCount() {
        return $this->count;
      }

      public function removePoneyFromField($number) {
        if ($number > $this->count) {
          throw new Exception("Error Can't have negative amount of poney on the field", 1);

        }
        $this->count -= $number;
      }

      public function addPoneyToField($number) {
        $this->count += $number;
      }

      public function getNames() {

      }

      public function setCount($number) {
        $this->count = $number;
      }
  }
?>
