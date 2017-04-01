<?php
/**
 *
 */

namespace domain;


interface WalletRepositoryInterface extends RepositoryInterface
{
    public function add(WalletEntity $wallet);
}