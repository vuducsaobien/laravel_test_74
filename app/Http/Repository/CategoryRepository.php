<?php

namespace App\Http\Repository;

use App\Http\Models\CategoryModel;

class CategoryRepository
{
    public function __construct()
    {
    }

    public function getAll()
    {
        return CategoryModel::all();
    }
}
