<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'question_id'
    ];

    public function result()
    {
        return $this->hasOne(Result::class, 'test_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'question_id');
    }
}
