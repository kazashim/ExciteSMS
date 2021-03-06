<?php

declare(strict_types=1);

/*
 * ExcitesmsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ExcitesmsLib;

use ExcitesmsLib\Http\HttpRequest;

/**
 * Interface for defining the behavior of Authentication Classes.
 */
interface AuthManagerInterface
{
    /**
     * Adds authentication to the given HttpRequest.
     */
    public function apply(HttpRequest $httpRequest);
}
