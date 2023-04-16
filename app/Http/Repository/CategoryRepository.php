<?php

namespace App\Http\Repository;

use App\Http\Models\CategoryModel;
use App\Http\Repository\BaseRepository;
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    public function getModel()
    {
        return CategoryModel::class;
    }

    public function getCategory()
    {
        return $this->model->get();
    }
}
