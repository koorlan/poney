<?php
  require_once 'src/Poneys.php';

  class RaceTest extends \PHPUnit_Framework_TestCase {

    public function test_CanNotHaveNegativePoneyInField() {
      $Poneys = new Poneys();

      // expectException
      $this->expectException(Exception::class);

      // Action
      $Poneys->removePoneyFromField(100);
    }
  }
 ?>
