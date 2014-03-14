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
  function testInput1ShouldReturn1() {
    $expected = 1;
    $input = 1;
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }

  function testInput2ShouldReturn2() {
    $expected = 2;
    $input = 2;
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
  
  function testInput3ShouldReturnFizz() {
    $expected = 'Fizz';
    $input = 3;
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
  
  function testInput4ShouldReturn4() {
    $expected = 4;
    $input = 4;
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }

  function testInput5ShouldReturnBuzz(){
    $expected = 'Buzz';
    $input = 5;
    $result = $this->countFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
  function countFizzbuzz($input) {
    $fizzbuzz = new Fizzbuzz();
    return $fizzbuzz->validateFizzbuzz($input);
  }
}
