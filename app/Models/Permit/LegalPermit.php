<?php

namespace App\Models\Permit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalPermit extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;
    
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'legal_permits', 'length' => 5, 'prefix' => 'LP', 'reset_on_prefix_change'=>true]);
        });
    }

}
