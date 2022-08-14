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

class ProcessPaymentControllerTest extends TestCase
{
    /**
     * @var \PromptPaymentsSDKLib\Controllers\ProcessPaymentController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getProcessPaymentController();
    }


    /**
     * Todo Add description for test testNewRequest
     */
    public function testNewRequest()
    {
        // Parameters for the API call
        $custom = 'DFU80XZIKS';
        $currencyCode = 'USD';
        $amount = 100;
        $details = 'jkhfkhae';
        $webHook = 'http://yoursite.com/web_hook.php';
        $cancelUrl = 'http://yoursite.com/cancel_url.php';
        $successUrl = 'http://yoursite.com/success_url.php';
        $customerEmail = 'kazzy@gmail.com';

        // Set callback and perform API call
        try {
            self::$controller->createMakePayment($custom, $currencyCode, $amount, $details, $webHook, $cancelUrl, $successUrl, $customerEmail);
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
