<?php

/**
 * ResourceErrors range from 4000 to 4999
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/puzzlout/Exceptions
 * @since Version 1.0.0
 * @package ResourceErrors
 */

namespace Puzzlout\Exceptions\Codes;

abstract class ResourceErrors {
    /**
     * Used when an error code for a particular case is not yet created when dealing with resources.
     */
    const UNASSIGNED_ERROR = 4000;
}
