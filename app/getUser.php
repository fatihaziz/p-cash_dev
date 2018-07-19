<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class getUser extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = "Users";

    public function identity()
    {
        return $this->hasMany('App\Identity', 'id', 'userId');
    }
}
