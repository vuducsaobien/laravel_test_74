<?php

namespace App\Http\Repository;

use App\Http\Models\CacheRedisModel;

use App\Http\Repository\InterfacesRepo\CacheRepositoryInterface;
use Illuminate\Support\Facades\DB;

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

    public function getAllPagi()
    {
        // echo '<h3>Die is Called - 123</h3>';die;

        // DB::enableQueryLog(); // Enable query log
        $query = $this->model->select('*');

        $result =  $query
        ->orderBy('id', 'asc')
        ->paginate($this->itemPerPage);


        // dd(DB::getQueryLog()); // Show results of log

        // echo '<pre style="color:red";>$result === '; print_r($result);echo '</pre>';
        // echo '<h3>Die is Called - 123</h3>';die;

        return $result;

    }
}
