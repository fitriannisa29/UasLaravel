<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = "tb_barang";

    protected $primaryKey = "barang_id";

    protected $guarded = [];
}
