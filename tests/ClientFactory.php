<?php

declare(strict_types=1);

/*
 * PromptPaymentsSDK
 *
 * This file was automatically generated for PromptPay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PromptPaymentsSDKLib\Tests;

class ClientFactory
{
    public static function create(HttpCallBackCatcher $httpCallback): \PromptPaymentsSDKLib\PromptPaymentsSDKClient
    {
        $client = (new \PromptPaymentsSDKLib\PromptPaymentsSDKClient(static::getConfigurationFromEnvironment()))
            ->withConfiguration(static::getTestConfiguration($httpCallback));
        return $client;
    }

    public static function getTestConfiguration(HttpCallBackCatcher $httpCallback): array
    {
        return ['environment' => \PromptPaymentsSDKLib\Environment::PRODUCTION, 'httpCallback' => $httpCallback];
    }

    public static function getConfigurationFromEnvironment(): array
    {
        $config = [];
        $timeout = getenv('PROMPT_PAYMENTS_SDK_TIMEOUT');
        $numberOfRetries = getenv('PROMPT_PAYMENTS_SDK_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('PROMPT_PAYMENTS_SDK_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('PROMPT_PAYMENTS_SDK_ENVIRONMENT');
        $accessToken = getenv('PROMPT_PAYMENTS_SDK_ACCESS_TOKEN');

        if ($timeout !== false && \is_numeric($timeout)) {
            $config['timeout'] = intval($timeout);
        }

        if ($numberOfRetries !== false && \is_numeric($numberOfRetries)) {
            $config['numberOfRetries'] = intval($numberOfRetries);
        }

        if ($maximumRetryWaitTime !== false && \is_numeric($maximumRetryWaitTime)) {
            $config['maximumRetryWaitTime'] = intval($maximumRetryWaitTime);
        }

        if ($environment !== false) {
            $config['environment'] = $environment;
        }

        if ($accessToken !== false) {
            $config['accessToken'] = $accessToken;
        }

        return $config;
    }
}
