<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = "faq";

    protected $fillable = [
        "question","answer","noUrut","active"
    ];

    public $timestamps = true;
}