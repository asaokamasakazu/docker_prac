<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const UPDATED_AT = null;

    protected $guarded = ['contact_id'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}
