<?php

/**
 * CacheErrors range from 2000 to 2999
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/puzzlout/Exceptions
 * @since Version 1.0.0
 * @package CacheErrors
 */

namespace Puzzlout\Exceptions\Codes;

abstract class CacheErrors {
    /**
     * Used when an error code for a particular case is not yet created when dealing with caching data.
     */
    const UNASSIGNED_ERROR = 2000;
}
