<?php
/**
 *
 */

namespace domain;


class WalletEntity extends IdentityObject
{
    /** @var ClientEntity */
    protected $client;
    /** @var CurrencyEntity */
    protected $currency;

    /**
     * Зачисление денежных средств на кошелек
     * @param Money $money
     * @throws \Exception
     */
    public function replenish(Money $money)
    {
        if (!$this->currency->compareToOtherCurrency($money->getCurrency())) {
            throw new \Exception('');
        }
    }

    /**
     * Списание денежных средств с кошелека
     * @param Money $money
     * @throws \Exception
     */
    public function withdraw(Money $money)
    {
        if (!$this->currency->compareToOtherCurrency($money->getCurrency())) {
            throw new \Exception('');
        }
    }

    public function getCurrency()
    {
        return $this->getCurrency();
    }
}
