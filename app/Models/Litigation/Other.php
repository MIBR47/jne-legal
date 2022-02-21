<?php

namespace App\Models\Litigation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Other extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $primaryKey = 'id';

    public $incrementing = false;

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->id = IdGenerator::generate(['table' => 'others', 'length' => 6, 'prefix' => 'OTH', 'reset_on_prefix_change'=>true]);
    //     });
    // }

    public function cs(){
        return $this->hasOne(Cs::class,'form_id','id');
    }

}
