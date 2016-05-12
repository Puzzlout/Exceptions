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

    /**
     * Used when an action doesn't exist in a controller.
     */
    const ACTION_NOT_FOUND_FOR_CONTROLLER = 3001;

    /**
     * Used when a view doesn't exist.
     */
    const VIEW_NOT_FOUND = 3002;

    /**
     * Used when a partial view doesn't exist.
     */
    const PARTIAL_VIEW_NOT_FOUND = 3003;

    /**
     * Used to reveal that the ErrorController is missing in the application.
     */
    const ERROR_CONTROLLER_MUST_EXIST = 3004;
}
