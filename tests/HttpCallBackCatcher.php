<?php
/*
 * PromptPaymentsSDK
 *
 * This file was automatically generated for PromptPay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PromptPaymentsSDKLib\Tests;

use PromptPaymentsSDKLib\Http\HttpCallBack;

/**
 * An HTTPCallBack that captures the request and response for use later
 */
class HttpCallBackCatcher extends HttpCallBack
{
    /**
     * Http request
     * @var PromptPaymentsSDKLib\Http\HttpRequest
     */
    private $request;

    /**
     * Http Response
     * @var PromptPaymentsSDKLib\Http\HttpResponse
     */
    private $response;

    /**
     * Create instance
     */
    public function __construct()
    {
        $instance = $this;
        parent::__construct(null, function ($httpContext) use ($instance) {
            $instance->request = $httpContext->getRequest();
            $instance->response = $httpContext->getResponse();
        });
    }

    /**
     * Get the HTTP Request object associated with this API call
     * @return PromptPaymentsSDKLib\Http\HttpRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Get the HTTP Response object associated with this API call
     * @return PromptPaymentsSDKLib\Http\HttpResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}
