<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'content',
    ];

    //--- Public Scopes ---//
    protected static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->user_id = auth()->id();
        });
    }
    

    public function comments()
    {
        //return $this->hasMany(Comment::class)->whereNull('parent_id');
        return $this->hasMany(Comment::class);
    }
}
