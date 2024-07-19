<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportCoupon extends Model
{
    use HasFactory;
    protected $table = 'import_coupon';

    protected $fillable = [
        'user_id',
        'supplier_id',
        'total',
        'status',
        'coupon_code',
        'payment_ncc'
    ];

    protected $appends = ['detail', 'user', 'supplier'];
    public function getDetailAttribute(){
        return ImportDetail::where('import_id',$this->attributes['id'])->get();
    }
    public function getUserAttribute(){
        return User::where('id',$this->attributes['user_id'])->first();
    }
    public function getSupplierAttribute(){
        return Supplier::where('id',$this->attributes['supplier_id'])->first();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the import coupon's details.
     */
    public function details()
    {
        return $this->hasMany(b::class, 'phieu_nhap_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestCoupon = ImportCoupon::orderBy('id', 'desc')->first();
            $model->coupon_code = 'MP' . str_pad($latestCoupon ? ($latestCoupon->id + 1) : 1, 6, '0', STR_PAD_LEFT);
        });
    }
}
