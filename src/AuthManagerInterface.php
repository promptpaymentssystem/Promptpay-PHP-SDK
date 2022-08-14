<?php

declare(strict_types=1);

/*
 * PromptPaymentsSDK
 *
 * This file was automatically generated for PromptPay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PromptPaymentsSDKLib;

use PromptPaymentsSDKLib\Http\HttpRequest;

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
