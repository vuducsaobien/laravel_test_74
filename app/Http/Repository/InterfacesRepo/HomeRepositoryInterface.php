<?php

namespace App\Http\Repository\InterfacesRepo;

use App\Http\Repository\InterfacesRepo\RepositoryInterface;

interface HomeRepositoryInterface extends RepositoryInterface
{
    public function getHome();
}