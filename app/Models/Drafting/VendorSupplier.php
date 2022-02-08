<?php

namespace App\Models\Drafting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSupplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;
    
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'vendor_suppliers', 'length' => 5, 'prefix' => 'VS', 'reset_on_prefix_change'=>true]);
        });
    }   
}
