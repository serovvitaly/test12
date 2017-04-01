<?php
/**
 *
 */

namespace domain;


class Money
{
    protected $amount;
    protected $currency;

    public function __construct(CurrencyEntity $currency, $amount)
    {
        $this->amount = (float) $amount;
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }
}