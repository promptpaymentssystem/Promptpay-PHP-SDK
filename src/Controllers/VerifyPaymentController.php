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
use PromptPaymentsSDKLib\Server;

class VerifyPaymentController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * You can verify the payment whether it is valid or not. After successful payment transaction you will
     * have the response where you find the Payment ID. With this payment id and your access key you need
     * make a request to our server for verify the payment. Example code is below.
     *
     * Payment verify end point : http://promptpayments.io/payment/check-validity
     *
     * @param string $paymentId Your generated payment ID
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getVerifyPayment(string $paymentId): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::SERVER_1) . '/check-validity';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'payment_id' => $paymentId,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
