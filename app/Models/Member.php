<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   protected $fillable = [
      'firstName',  
      'lastName',  
      'email',  
      'phoneNumber',  
      'membershipDate',  
    ];
}
