<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Exceptions\Tests\Classes\Core;

use Puzzlout\Exceptions\Classes\Core\InvalidArgumentException;

class InvalidArgumentExceptionTest extends \PHPUnit_Framework_TestCase {
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
    $result = new InvalidArgumentException();
    $this->assertInstanceOf('Puzzlout\Exceptions\Classes\Core\InvalidArgumentException', $result);
  }
  
  //Write the next tests below...
  
}