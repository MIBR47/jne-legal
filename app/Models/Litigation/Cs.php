<?php

namespace App\Models\Litigation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Cs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'cs', 'length' => 5, 'prefix' => 'CS', 'reset_on_prefix_change'=>true]);
        });
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function other(){
        return $this->belongsTo(Other::class,'form_id','id');
    }

    public function fraud(){
        return $this->belongsTo(Fraud::class,'form_id','id');
    }

    public function customer_dispute(){
        return $this->belongsTo(CustomerDispute::class,'form_id','id');
    }

    public function outstanding(){
        return $this->belongsTo(Outstanding::class,'form_id','id');
    }

}
