<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'description',
        'photo',
        'body',
        'user_id'
    ];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
