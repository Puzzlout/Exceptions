<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Exceptions\Tests\Classes;

use Puzzlout\Exceptions\Classes\ViewNotFoundException;

class ViewNotFoundExceptionTest extends \PHPUnit_Framework_TestCase {
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
    $result = new ViewNotFoundException();
    $this->assertInstanceOf('Puzzlout\Exceptions\Classes\ViewNotFoundException', $result);
  }
  
  //Write the next tests below...
  
}