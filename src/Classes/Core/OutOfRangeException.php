<?php

/**
 * 
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Exceptions
 * @since Version 1.0.0
 * @package OutOfRangeException
 */

namespace Puzzlout\Exceptions\Classes\Core;

class OutOfRangeException extends \OutOfRangeException {

    public function __construct($message = "", $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous); //todo: generate error code.
    }

}
