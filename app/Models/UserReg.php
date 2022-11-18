<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReg extends Model
{
    protected $table = 'user';
    protected $primarykey ='id';
    protected $fillable =['full_name', 'Town', 'tp_no',];

}
