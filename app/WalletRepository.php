<?php
/**
 *
 */

namespace app;


use domain\ClientEntity;
use domain\WalletEntity;

class WalletRepository implements \domain\WalletRepositoryInterface
{

    public static function getById($id)
    {
        return new WalletEntity($id);
    }

    public function add(WalletEntity $wallet)
    {
        // TODO: Implement add() method.
    }
}