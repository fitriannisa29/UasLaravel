<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pln extends Model
{
    use HasFactory;

    protected $table = "tb_pln";

    protected $primaryKey = "pln_id";

    protected $guarded = [];


}
