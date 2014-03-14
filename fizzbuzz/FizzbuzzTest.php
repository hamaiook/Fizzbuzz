<?php
class Fizzbuzz {
  function validateFizzbuzz($input) {
    if($input==3){
      return 'Fizz';
    }
    if($input==5){
      return 'Buzz';
    }
    return $input;
  }
}

class FizzbuzzTest extends PHPUnit_Framework_TestCase {
  function valueInput(){
    return array(array(1,1),
      array(2,2),
      array(3,"Fizz"),
      array(4,4),
      array(5,"Buzz"));
  }

  /**
   * @dataProvider valueInput
   */
  function testInputShouldReturn($input,$expected) {
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }

  function countFizzbuzz($input) {
    $fizzbuzz = new Fizzbuzz();
    return $fizzbuzz->validateFizzbuzz($input);
  }
}
