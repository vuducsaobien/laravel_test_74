<?php

namespace App\Http\Repository;

use App\Http\Repository\RepositoryInterface;

interface HomeRepositoryInterface extends RepositoryInterface
{
    public function getHome();
}