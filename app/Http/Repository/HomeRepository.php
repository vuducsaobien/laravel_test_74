<?php

namespace App\Http\Repository;

use App\Http\Models\HomeModel;

use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{

    public function getModel()
    {
        return HomeModel::class;
    }

    public function getHome()
    {
        return $this->model->get();
    }
}
