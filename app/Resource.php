<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public const TYPEOF_FOLDER = 1;

    public const TYPEOF_FILE = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'name', 'description', 'creator_id'];
}
