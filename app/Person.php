<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    protected $primarykey = 'person_id';
}
