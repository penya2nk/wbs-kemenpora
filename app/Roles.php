<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table = "roles";

    protected $fillable = [
        "role"
    ];

    public function user(){

        return $this->hasMany('User','roleId');

    }
}
