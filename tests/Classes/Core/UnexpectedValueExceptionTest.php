<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Exceptions\Tests\Classes\Core;

use Puzzlout\Exceptions\Classes\Core\UnexpectedValueException;

class UnexpectedValueExceptionTest extends \PHPUnit_Framework_TestCase {

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $result = new UnexpectedValueException();
        $this->assertInstanceOf('Puzzlout\Exceptions\Classes\Core\UnexpectedValueException', $result);
    }

    //Write the next tests below...
}
