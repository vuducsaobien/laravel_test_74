<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Table2Model extends Model
{
    public $table = 'table_2';
    protected $primaryKey = "id_table_2";

    public static $idAuto = 1;


    public $timestamps = false;

    /**
     * Get the user that owns the phone.
     */
    public function table1(): BelongsTo
    {
        return $this->belongsTo(Table1Model::class, 'id_table_2', 'id_table_2');
    }


    
}
