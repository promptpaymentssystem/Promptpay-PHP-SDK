<?php
/*
 * PromptPaymentsSDK
 *
 * This file was automatically generated for PromptPay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PromptPaymentsSDKLib\Tests;

use PromptPaymentsSDKLib\Exceptions\ApiException;
use PromptPaymentsSDKLib\Exceptions;
use PromptPaymentsSDKLib\ApiHelper;
use PromptPaymentsSDKLib\Models;
use PHPUnit\Framework\TestCase;

class VerifyPaymentControllerTest extends TestCase
{
    /**
     * @var \PromptPaymentsSDKLib\Controllers\VerifyPaymentController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getVerifyPaymentController();
    }


    /**
     * Todo Add description for test testVerifyPayment
     */
    public function testVerifyPayment()
    {
        // Parameters for the API call
        $paymentId = 'AIYmQIOAz0GlmsjfhgiOeu304';

        // Set callback and perform API call
        try {
            self::$controller->getVerifyPayment($paymentId);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
