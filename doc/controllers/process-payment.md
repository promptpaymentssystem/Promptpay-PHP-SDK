# Process Payment

```php
$processPaymentController = $client->getProcessPaymentController();
```

## Class Name

`ProcessPaymentController`


# Create Make Payment

```php
function createMakePayment(
    string $custom,
    string $currencyCode,
    int $amount,
    string $details,
    string $webHook,
    string $cancelUrl,
    string $successUrl,
    string $customerEmail
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `custom` | `string` | Query, Required | - |
| `currencyCode` | `string` | Query, Required | - |
| `amount` | `int` | Query, Required | - |
| `details` | `string` | Query, Required | - |
| `webHook` | `string` | Query, Required | - |
| `cancelUrl` | `string` | Query, Required | - |
| `successUrl` | `string` | Query, Required | - |
| `customerEmail` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$custom = 'DFU80XZIKS';
$currencyCode = 'USD';
$amount = 100;
$details = 'jkhfkhae';
$webHook = 'http://yoursite.com/web_hook.php';
$cancelUrl = 'http://yoursite.com/cancel_url.php';
$successUrl = 'http://yoursite.com/success_url.php';
$customerEmail = 'kazzy@gmail.com';

$processPaymentController->createMakePayment($custom, $currencyCode, $amount, $details, $webHook, $cancelUrl, $successUrl, $customerEmail);
```

## Full Example

```php
<?php

require_once "vendor/autoload.php";

$client = new PromptPaymentsAPILib\PromptPaymentsAPIClient([
    'accessToken' => 'AccessToken',
]);

$processPaymentController = $client->getProcessPaymentController();

$custom = 'DFU80XZIKS';
$currencyCode = 'USD';
$amount = 100;
$details = 'jkhfkhae';
$webHook = 'http://yoursite.com/web_hook.php';
$cancelUrl = 'http://yoursite.com/cancel_url.php';
$successUrl = 'http://yoursite.com/success_url.php';
$customerEmail = 'kazzy@gmail.com';

try {
    $processPaymentController->createMakePayment($custom, $currencyCode, $amount, $details, $webHook, $cancelUrl, $successUrl, $customerEmail);
} catch (PromptPaymentsAPILib\Exceptions\ApiException $e) {
    echo 'Caught ApiException: ',  $e->getMessage(), "\n";
}
```
