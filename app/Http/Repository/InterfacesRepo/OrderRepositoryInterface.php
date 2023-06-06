<?php

namespace App\Http\Repository\InterfacesRepo;

use App\Http\Repository\InterfacesRepo\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getOrderList();
}