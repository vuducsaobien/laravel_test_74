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

    
}
