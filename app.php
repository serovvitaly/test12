<?php

/**
 * регистрация клиента с указанием его имени, страны, города регистрации, валюты создаваемого кошелька
 */
$cityId = 1;
$countryId = 1;

$clientRepository = new \app\ClientRepository;
$client = new \domain\ClientEntity();
$client
    ->setCity(new \domain\CityEntity($cityId))
    ->setCountry(new \domain\CountryEntity($countryId))
    ->setFirstName('')
    ->setLastName('')
;
$clientRepository->add($client);

/**
 * зачисление денежных средств на кошелек клиента
 */
$walletId = 1;
$currencyId = 3;
$amount = 3;

$walletService = new WalletService;
$walletService->moneyReplenish($walletId, $currencyId, $amount);


/**
 * перевод денежных средств с одного кошелька на другой.
 */
$fromWalletId = 1;
$toWalletId = 2;
$currencyId = 3;
$amount = 3;

$walletService = new WalletService;
$walletService->moneyTransfer($fromWalletId, $toWalletId, $currencyId, $amount);

/**
 * загрузка котировки валюты к USD на дату
 */