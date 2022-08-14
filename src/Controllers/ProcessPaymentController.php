<?php

declare(strict_types=1);

/*
 * PromptPaymentsSDK
 *
 * This file was automatically generated for PromptPay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PromptPaymentsSDKLib\Controllers;

use PromptPaymentsSDKLib\Exceptions\ApiException;
use PromptPaymentsSDKLib\ConfigurationInterface;
use PromptPaymentsSDKLib\ApiHelper;
use PromptPaymentsSDKLib\Http\HttpRequest;
use PromptPaymentsSDKLib\Http\HttpResponse;
use PromptPaymentsSDKLib\Http\HttpMethod;
use PromptPaymentsSDKLib\Http\HttpContext;
use PromptPaymentsSDKLib\Http\HttpCallBack;

class ProcessPaymentController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $custom
     * @param string $currencyCode
     * @param int $amount
     * @param string $details
     * @param string $webHook
     * @param string $cancelUrl
     * @param string $successUrl
     * @param string $customerEmail
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMakePayment(
        string $custom,
        string $currencyCode,
        int $amount,
        string $details,
        string $webHook,
        string $cancelUrl,
        string $successUrl,
        string $customerEmail
    ): void {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/process';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'custom'         => $custom,
            'currency_code'  => $currencyCode,
            'amount'         => $amount,
            'details'        => $details,
            'web_hook'       => $webHook,
            'cancel_url'     => $cancelUrl,
            'success_url'    => $successUrl,
            'customer_email' => $customerEmail,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }
}
