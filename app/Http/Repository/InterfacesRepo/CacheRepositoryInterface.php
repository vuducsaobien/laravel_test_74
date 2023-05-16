<?php

namespace App\Http\Repository\InterfacesRepo;

use App\Http\Repository\InterfacesRepo\RepositoryInterface;

interface CacheRepositoryInterface extends RepositoryInterface
{
    public function getAll();
}