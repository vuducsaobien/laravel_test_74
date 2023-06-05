<?php

namespace App\Http\Controllers;

use App\Http\Services\DatabseService;
// use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    private $dbServive;

    public function __construct(
        DatabseService $dbServive
    ){
        parent::__construct();
        $this->dbServive = $dbServive;
    }


    public function index()
    {
        $fff = $this->dbServive->index();
    }

    public function relationOneOne()
    {
        $fff = $this->dbServive->relationOneOneSer();

        echo '<h3>Die is Called - relationOneOne</h3>';die;
    }
}
