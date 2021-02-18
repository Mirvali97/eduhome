<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';

   protected  $fillable = [
       'full_name',
       'email',
       'city',
       'phone',
       'password',
       'course',
   ];


    public function course(){
        return $this->hasMany(Course::class);
    }
}
