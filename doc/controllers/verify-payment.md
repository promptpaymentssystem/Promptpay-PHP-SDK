# Verify Payment

```php
$verifyPaymentController = $client->getVerifyPaymentController();
```

## Class Name

`VerifyPaymentController`


# Get Verify Payment

You can verify the payment whether it is valid or not. After successful payment transaction you will have the response where you find the Payment ID. With this payment id and your access key you need make a request to our server for verify the payment. Example code is below.

Payment verify end point : http://promptpayments.io/payment/check-validity

```php
function getVerifyPayment(string $paymentId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentId` | `string` | Query, Required | Your generated payment ID |

## Response Type

`void`

## Example Usage

```php
$paymentId = 'AIYmQIOAz0GlmsjfhgiOeu304';

$verifyPaymentController->getVerifyPayment($paymentId);
```

