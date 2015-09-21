<?php
  require_once 'src/Unicorns.php';

  class UnicornsTest extends \PHPUnit_Framework_TestCase {
    public function test_can_steal() {
      // Setup
      $unicorns = new Unicorns();

      // Action
      $unicorns->steal(5);
      
      // Assert
      $this->assertEquals(3, $unicorns->getCount());
    }
  }
 ?>
