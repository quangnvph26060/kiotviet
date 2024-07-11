<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehome extends Model
{
    use HasFactory;
    protected $table = 'warehouse';

    protected $fillable = ['product_id', 'user_id', 'reality', 'difference'];

    // protected $appends = ['product'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // public function getProductAttribute(){
    //     return
    // }
}
