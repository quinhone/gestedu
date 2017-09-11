<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    protected $fillable = [
        'address',
        'cep',
        'number',
        'complement',
        'city',
        'neighborhood',
        'state',
    ];
}
