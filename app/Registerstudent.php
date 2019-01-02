<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Registerstudent extends Model
{
    use Notifiable;
    protected $fillable=['name','roll','grade','email','shift','gender','dob','english','nepali','economics','account','math','total'];
}
