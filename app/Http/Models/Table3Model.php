<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Table2Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table3Model extends Model
{
    public $table = 'table_3';

    public static $idAuto = 1;

    protected $primaryKey = "id_table_3";


    public $timestamps = false;

    public function table4(): HasMany
    {
        return $this->hasMany(Table4Model::class, 'table_4_id_table_3', $this->primaryKey);

    }


    
}
