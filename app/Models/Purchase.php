<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function purchaseDetails(){
        return $this->hasMany(PurchaseDetail::class,'purchase_id');
    }

    protected static function booted()
    {
        static::deleted(function($deletedSaleRow){

            $deletedSaleRow->purchaseDetails()->delete();
        });
    }
}
