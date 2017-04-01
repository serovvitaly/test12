<?php
/**
 *
 */

namespace domain;


interface ClientRepositoryInterface extends RepositoryInterface
{
    public function add(ClientEntity $client);
}