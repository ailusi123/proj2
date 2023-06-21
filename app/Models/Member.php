<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $tabel = 'member';
    protected $guarded = [];
    protected $primaryKey =['id_member'];

}
