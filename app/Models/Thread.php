<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     * Fetch a path to the current thread.
     *
     * @return string
     */
    public function path()
    {
        return '/threads/' . $this->id;
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}