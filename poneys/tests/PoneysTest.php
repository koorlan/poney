<?php
  require_once 'src/Poneys.php';

  class PoneysTest extends \PHPUnit_Framework_TestCase {
    private $PONEY_NUMBER = 8;

    protected function setUp(){
      $this->PONEY_NUMBER = intval(getenv('PONEY_NUMBER'));
      $this->poneys = new Poneys();
      $this->poneys->setCount($this->PONEY_NUMBER);
    }


   /**
   * @param $number
   *
   * @dataProvider validRemovePoneys
   */
    public function test_removePoneyFromField($number) {
      // Action
      $this->poneys->removePoneyFromField($number);

      // Assert
      $this->assertEquals($this->PONEY_NUMBER-$number, $this->poneys->getCount());
    }

    public function test_CanNotHaveNegativePoneyInField() {
      // expectException
      $this->expectException(Exception::class);

      // Action
      $this->poneys->removePoneyFromField(100);
    }


    public function test_addPoneyToField() {
      // Action
      $this->poneys->addPoneyToField(3);

      // Assert
      $this->assertEquals($this->PONEY_NUMBER+3, $this->poneys->getCount());
    }

    public function test_getNamesPoneys(){
      $poneys = $this->createMock(Poneys::class);
      $poneys->method('getNames')->willReturn(['Stewball','Tata','Yoyo']);
      $this->assertEquals(['Stewball','Tata','Yoyo'],$poneys->getNames());
    }

    public function test_setCountPoneys(){

        $this->poneys->setCount(20);

        $this->assertEquals($this->poneys->getCount(), 20);
    }


    public function test_CanNotHaveMoreThan15Poneys(){

        $this->assertLessThanOrEqual(15, $this->poneys->getCount());
    }


    public static function validRemovePoneys()
    {
      return [
        [1],
        [2],
        [3],
        [4],
        [5],
        [6],
        [7],
        [8]
      ];
    }

    protected function tearDown(){
      unset($this->poneys);
    }


  }
 ?>
