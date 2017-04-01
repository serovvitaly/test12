<?php
/**
 *
 */

namespace domain;


class CurrencyEntity extends IdentityObject
{
    protected $shortName;

    /**
     * Сравнивает типы текущей и переданной валюты, если валюты однотипные,
     * то возвращается TRUE, в противном случае возвращается FALSE
     * @param CurrencyEntity $currency
     * @return bool
     */
    public function compareToOtherCurrency(CurrencyEntity $currency)
    {
        return $this->getShortName() === $currency->getShortName();
    }

    /**
     * Возвращает короткое имя валюты по стандарту "ISO 4217"
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }
}
