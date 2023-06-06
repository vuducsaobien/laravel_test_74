<?php

namespace App\Http\Repository;

use App\Http\Models\OrderModel;
use App\Http\Repository\BaseRepository;
use App\Http\Repository\InterfacesRepo\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    public function getModel()
    {
        return OrderModel::class;
    }

    public function getOrderList()
    {

        echo '<h3>Die is Called - getOrderList</h3>';die;
        return $this->model->get();

    }
}
