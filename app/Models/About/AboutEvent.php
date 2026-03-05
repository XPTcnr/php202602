<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class AboutEvent extends Model
{
    public $timestamps = false;
    protected $table = "events";
    protected $primaryKey = 'id';
    protected $fillable = ["id", "dates", "title", "content", "createTime"];
}
