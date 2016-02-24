<?php

/**
 * MvcErrors range from 3000 to 3999
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/puzzlout/Exceptions
 * @since Version 1.0.0
 * @package MvcErrors
 */

namespace Puzzlout\Exceptions\Codes;

abstract class MvcErrors {
    /**
     * Used when an error code for a particular case is not yet created when dealing with the MVC pattern.
     */
    const UNASSIGNED_ERROR = 3000;
    const ACTION_NOT_FOUND_FOR_CONTROLLER = 3001;

}
