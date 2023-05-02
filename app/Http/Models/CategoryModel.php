<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    // use HasFactory;

    public $table = 'category';

    public function __construct()
    {
        // echo '<h3>Die is Called - HomeModel</h3>';die;
    }

    
}
