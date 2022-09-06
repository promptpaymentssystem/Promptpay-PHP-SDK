# Promptpay-PHP-SDK

Download Via Composer 
```cmd
composer require promptpay/promptpaymentsapi
```

# Prompt Pay Express Payment Gateway Documentation

## API Credencials 

To get your API Credentials Signup as a merchant https://promptpayments.io/register ``-> Merchants`` ``-> New Merchant`` ``Type -> Express``

## Payer

If payer wants to fund payments using Prompt Pay, set payer to Prompt Pay.
(Other payment method ex: paypal, stripe, coinpayments etc not available yet).

## Amount

Specify a payment amount and the currency.

## Transaction

It’s a Transaction resource where amount object has to set.

## RedirectUrls

Set the urls where buyer should redirect after transaction is completed or cancelled.

## payment

It’s a payment resource where all Payer, Amount, RedirectUrls and Credentials of merchant (Client ID and Client Secret) have to set. After initialized into payment object, need to call create method. It will generate a redirect URL. Users have to redirect into this URL to complete the transaction.

## Example importing 

```php
<?php

require 'vendor/autoload.php';

use PromptPay\Api\Amount;
use PromptPay\Api\Payer;
use PromptPay\Api\Payment;
use PromptPay\Api\RedirectUrls;
use PromptPay\Api\Transaction;
```
Refer to the example file ```example.php```
