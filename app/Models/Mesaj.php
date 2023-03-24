<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesaj extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable=['name','email','subject','message'];
}
