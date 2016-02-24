<?php

/**
 * LogicErrors range from 1000 to to 1999.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/puzzlout/Exceptions
 * @since Version 1.0.0
 * @package LogicErrors
 */

namespace Puzzlout\Exceptions\Codes;

abstract class LogicErrors {
    /**
     * Used when an error code for a particular case is not yet created when dealing with code logic.
     */
    const UNASSIGNED_ERROR = 1000;
}
