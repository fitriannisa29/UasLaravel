<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $table = "tb_pesanan";

    protected $primaryKey = "pesanan_id";

    protected $guarded = [];
}
