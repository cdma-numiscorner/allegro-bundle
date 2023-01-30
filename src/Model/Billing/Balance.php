<?php

namespace Numiscorner\AllegroBundle\Model\Billing;

class Balance
{
    /**
     * @var string
     */
    private string $amount;

    /**
     * @var string
     */
    private string $currency = "0.00";

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return Balance
     */
    public function setAmount(string $amount): Balance
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
     * @return Balance
     */
    public function setCurrency(string $currency): Balance
    {
        $this->currency = $currency;
        return $this;
    }
}