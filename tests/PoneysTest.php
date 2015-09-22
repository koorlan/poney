<?php
  require_once 'src/Poneys.php';

  class PoneysTest extends \PHPUnit_Framework_TestCase {
    public function test_can_steal() {
      // Setup
      $Poneys = new Poneys();

      // Action
      $Poneys->steal(3);
      
      // Assert
      $this->assertEquals(5, $Poneys->getCount());
    }
  }
 ?>
