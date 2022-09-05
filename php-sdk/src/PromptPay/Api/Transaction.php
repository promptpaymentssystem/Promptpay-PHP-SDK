<?php namespace PromptPay\Api;

use PromptPay\Common\PromptPayModel;

/**
 * Class Transaction
 * @property \PromptPay\Api\Amount amount
 *
 */

class Transaction extends PromptPayModel
{

    /**
     * @param \PromptPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}