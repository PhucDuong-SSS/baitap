<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mark',
        'time',
        'test_id',
        'user_id'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
