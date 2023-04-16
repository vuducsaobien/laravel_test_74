<?php

namespace App\Http\Repository;

use App\Http\Repository\RepositoryInterface;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function getCategory();
}