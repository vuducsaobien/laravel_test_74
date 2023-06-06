<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Table2Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Table4Model extends Model
{
    public $table = 'table_4';

    public static $idAuto = 1;

    protected $primaryKey = "id_table_4";


    public $timestamps = false;

    public function table3(): BelongsTo
    {
        $result = $this->belongsTo(Table3Model::class, 'table_4_id_table_3', 'id_table_3');

        // Equal
        // $result = DB::select("SELECT * FROM table_3 WHERE table_3.id_table_3 = (
        //     SELECT table_4.table_4_id_table_3 FROM table_4 WHERE table_4.id_table_4 = 15
        // )");

        // echo '<pre style="color:red";>$result === '; print_r($result);echo '</pre>';
        // echo '<h3>Die is Called - 213</h3>';die;

        return $result;

    }


    
}
