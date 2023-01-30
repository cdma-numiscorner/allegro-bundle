<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Value
{
    /**
     * @var string
     */
    private string $amount;

    /**
     * @var string
     */
    private string $currency;

    /**
     * @return float|string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param float|string $amount
     * @return Value
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Value
     */
    public function setCurrency(string $currency): Value
    {
        $this->currency = $currency;
        return $this;
    }
}
