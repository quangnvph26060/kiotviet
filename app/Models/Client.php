<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients'; // Tên bảng trong cơ sở dữ liệu
    protected $fillable = [
        'name',
        'phone',
        'zip_code',
        'address',
    ];
}
