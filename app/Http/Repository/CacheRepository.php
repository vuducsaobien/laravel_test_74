<?php

namespace App\Http\Repository;

use App\Http\Models\CacheRedisModel;

use App\Http\Repository\InterfacesRepo\CacheRepositoryInterface;

class CacheRepository extends BaseRepository implements CacheRepositoryInterface
{

    public function getModel()
    {
        return CacheRedisModel::class;
    }

    public function getAll()
    {
        return $this->model->paginate(3)->all();
    }
}
