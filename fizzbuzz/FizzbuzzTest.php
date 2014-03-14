<?php
class Fizzbuzz {
  function validateFizzbuzz($input) {
    if($input==3){
      return 'Fizz';
    }
    return $input;
  }
}

class FizzbuzzTest extends PHPUnit_Framework_TestCase {
  function testInput1ShouldReturn1() {
    $expected = 1;
    $input = 1;
    $fizzbuzz = new Fizzbuzz();
    $result = $fizzbuzz->validateFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }

  function testInput2ShouldReturn2() {
    $expected = 2;
    $input = 2;
    $fizzbuzz = new Fizzbuzz();
    $result = $fizzbuzz->validateFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
  
  function testInput3ShouldReturnFizz() {
    $expected = 'Fizz';
    $input = 3;
    $fizzbuzz = new Fizzbuzz();
    $result = $fizzbuzz->validateFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
  
  function testInput4ShouldReturn4() {
    $expected = 4;
    $input = 4;
    $fizzbuzz = new Fizzbuzz();
    $result = $fizzbuzz->validateFizzbuzz($input);
    $this->assertEquals($expected, $result);
  }
}
