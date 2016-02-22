<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Exceptions\Tests\Classes;

use Puzzlout\Exceptions\Classes\InvalidViewModelTypeException;

class InvalidViewModelTypeExceptionTest extends \PHPUnit_Framework_TestCase {
  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $result = new InvalidViewModelTypeException();
    $this->assertInstanceOf('Puzzlout\Exceptions\Classes\InvalidViewModelTypeException', $result);
  }
  
  //Write the next tests below...
  
}