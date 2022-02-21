<?php

namespace App\Models\Litigation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CustomerDispute extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $primaryKey = 'id';

    public $incrementing = false;

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->id = IdGenerator::generate(['table' => 'customer_disputes', 'length' => 5, 'prefix' => 'CD', 'reset_on_prefix_change'=>true]);
    //     });
    // }

    public function cs(){
        return $this->hasOne(Cs::class,'form_id','id');
    }
}
