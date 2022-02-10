<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReasonPermit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'reason_permits', 'length' => 6, 'prefix' => 'RSP', 'reset_on_prefix_change'=>true]);
        });
    }
}
