<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetizen extends Model
{
    use HasFactory;

    protected $fillable = ['fname', 'lname', 'gender', 'age', 'image', 'bod', 'address'];

}
