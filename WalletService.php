<?php

/**
 *
 */
class WalletService
{
    /**
     * Зачисление денежных средств на кошелек клиента
     * @param int $walletId
     * @param int $currencyId
     * @param float $amount
     * @return bool
     * @throws Exception
     */
    public function moneyReplenish($walletId, $currencyId, $amount)
    {
        /** Получаем объект кошелька по ID */
        $wallet = \app\WalletRepository::getById($walletId);
        if (!$wallet) {
            throw new Exception("Wallet {$walletId} not found");
        }

        /** Получаем объект валюты по ID */
        $currency = \app\CurrencyRepository::getById($currencyId);
        if (!$currency) {
            throw new Exception("Currency {$currencyId} not found");
        }

        /** Создаем объект денег указанной валюты */
        $money = new \domain\Money($currency, $amount);

        /** Пополняем кошелек деньгами, и возвращаем результат */
        return $wallet->replenish($money);
    }

    /**
     * Перевод денежных средств с одного кошелька на другой
     * @param int $fromWalletId
     * @param int $toWalletId
     * @param int $currencyId
     * @param float $amount
     * @return bool
     * @throws Exception
     */
    public function moneyTransfer($fromWalletId, $toWalletId, $currencyId, $amount)
    {
        /** Получаем объект кошелька отправителя по ID */
        $walletFrom = \app\WalletRepository::getById($fromWalletId);
        if (!$walletFrom) {
            throw new Exception("Wallet {$fromWalletId} not found");
        }

        /** Получаем объект кошелька получателя по ID */
        $walletTo = \app\WalletRepository::getById($toWalletId);
        if (!$walletTo) {
            throw new Exception("Wallet {$toWalletId} not found");
        }

        /** Получаем объект валюты по ID */
        $currency = \app\CurrencyRepository::getById($currencyId);
        if (!$currency) {
            throw new Exception("Currency {$currencyId} not found");
        }

        /** Создаем объект денег указанной валюты */
        $money = new \domain\Money($currency, $amount);

        $withdrawingMoney = \CurrencyBrokerService::conversionCurrency($money, $walletFrom->getCurrency());
        $replenishingMoney = \CurrencyBrokerService::conversionCurrency($money, $walletTo->getCurrency());

        /**
         * Производим списание с одного кошелька и зачисление на другой внутри транзакции
         */
        $transactionStatus = \CurrencyBrokerService::transaction(
            function () use ($walletFrom, $withdrawingMoney, $walletTo, $replenishingMoney) {
                /** Списываем средства с кошелька отправителя */
                $walletFrom->withdraw($withdrawingMoney);
                /** Пополняем кошелек получателя */
                $walletTo->replenish($replenishingMoney);
            }
        );

        return $transactionStatus;
    }
}