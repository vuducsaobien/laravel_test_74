<?php

namespace App\Http\Repository\InterfacesRepo;

use App\Http\Repository\InterfacesRepo\RepositoryInterface;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function getCategory();
}