<?php
/**
 *
 */

namespace domain;


interface CurrencyRepositoryInterface extends RepositoryInterface
{
    public function add(CurrencyEntity $currency);
}