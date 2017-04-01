<?php
/**
 *
 */

namespace app;


use domain\CurrencyEntity;

class CurrencyRepository implements \domain\CurrencyRepositoryInterface
{

    public function add(CurrencyEntity $currency)
    {
        // TODO: Implement add() method.
    }

    public static function getById($id)
    {
        return new CurrencyEntity();
    }
}