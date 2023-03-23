<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    // use HasFactory;

    public $table = 'home';

    public function __construct()
    {
        // echo '<h3>Die is Called - HomeModel</h3>';die;
    }

    public function indexModel()
    {
        // $tb_data = DB::table('imported_tables')->where('id_hash', '=', $dbIds)->get();

        // $data = $this->get();

        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';

        echo '<h3>Die is Called - HomeModel indexModel</h3>';die;
    }
}
