<?php
namespace PromptPay\Api;

use PromptPay\Common\PromptPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends PromptPayModel
{

    /**
     * Valid Values: ["PromptPay"]
     * method will be like PromptPay, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
