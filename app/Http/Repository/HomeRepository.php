<?php

namespace App\Http\Repository;

use App\Http\Models\HomeModel;

class HomeRepository
{
    public function __construct()
    {
    }

    public function getAllHome()
    {
        return HomeModel::all();
    }
}
