<?php

namespace App\Models\Permit;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'permits', 'length' => 6, 'prefix' => 'PRM', 'reset_on_prefix_change'=>true]);
        });
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
