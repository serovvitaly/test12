<?php
use domain\CurrencyEntity;

/**
 *
 */
class CurrencyBrokerService
{
    /**
     * Сравнивает типы текущей и переданной валюты, если валюты однотипные,
     * то возвращается TRUE, в противном случае возвращается FALSE
     * @param CurrencyEntity $currency1
     * @param CurrencyEntity $currency2
     * @return bool
     */
    public static function compareCurrencies(CurrencyEntity $currency1, CurrencyEntity $currency2)
    {
        return $currency1->getShortName() === $currency2->getShortName();
    }

    /**
     * @param \domain\Money $money
     * @param CurrencyEntity $currency
     * @return \domain\Money
     */
    public static function conversionCurrency(\domain\Money $money, CurrencyEntity $currency)
    {
        if (self::compareCurrencies($money->getCurrency(), $currency)) {
            return $money;
        }

        return $money;
    }

    public static function transaction(callable $callback)
    {
        $callback();

        return true;
    }
}