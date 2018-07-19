<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    //
    // protected $table = 'post';
    // protected $primaryKey = 'post_id';
    use SoftDeletes;

    protected $fillable = [
        'sessionId',
        'brokerId',
        'email',
        'fname',
        'lname',
        'pass',
        'phone',
        'imgUrl'
    ];
}
